<?php

namespace App\Services\Portal;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Talks to the school portal's API (routes/api_v1.php on the portal).
 *
 *  - feed(): school details, numbers, class levels, subjects, public events
 *    (GET /api/v1/website/feed, needs PORTAL_WEBSITE_KEY);
 *  - staff(): staff list for "Our people" (GET /api/v1/website/staff);
 *  - signIn(): checks an admin's portal e-mail/phone + password
 *    (POST /api/v1/auth/login) and that they may manage the website.
 *
 * Portal data is cached; when the portal can't be reached the last good copy
 * is used, so the website never goes down with the portal.
 */
class PortalClient
{
    public static function configured(): bool
    {
        return config('portal.url') !== '';
    }

    public static function url(string $path = ''): string
    {
        return config('portal.url') . ($path === '' ? '' : '/' . ltrim($path, '/'));
    }

    protected static function http()
    {
        return Http::acceptJson()->timeout(config('portal.timeout', 8))->connectTimeout(5)
            ->withHeaders(['X-Website-Key' => config('portal.key'), 'User-Agent' => 'school-website/1.0']);
    }

    /** Feed with school, stats, academics and events (always an array with those keys). */
    public static function feed(bool $fresh = false): array
    {
        $empty = ['school' => [], 'stats' => [], 'academics' => ['levels' => [], 'subjects' => []], 'events' => [], 'ok' => false, 'error' => null];
        if (!self::configured()) return $empty + ['error' => 'PORTAL_URL is not set in .env.'];

        $key = 'portal.feed.v1';
        if (!$fresh && ($hit = Cache::get($key))) return $hit;

        try {
            $res = self::http()->get(self::url('api/v1/website/feed'), [
                'from' => now()->subMonths(2)->toDateString(),
                'to'   => now()->addMonths(12)->toDateString(),
            ]);
            if ($res->successful() && is_array($res->json('data'))) {
                $data = array_merge($empty, $res->json('data'), ['ok' => true, 'error' => null, 'fetched_at' => now()->toIso8601String()]);
                Cache::put($key, $data, now()->addMinutes(max(1, config('portal.cache_minutes', 30))));
                Cache::forever($key . '.last', $data);
                return $data;
            }
            $error = $res->json('message') ?: ('Portal answered ' . $res->status() . '.');
        } catch (\Throwable $e) {
            $error = 'Portal not reachable: ' . $e->getMessage();
        }

        Log::warning('[website] portal feed failed', ['error' => $error]);
        $last = Cache::get($key . '.last');
        $out = $last ? array_merge($last, ['ok' => false, 'error' => $error]) : array_merge($empty, ['error' => $error]);
        // Try again in a few minutes rather than on every page view.
        Cache::put($key, $out, now()->addMinutes(3));
        return $out;
    }

    /** Staff for "Our people": [['id','name','role','department','photo_url']]. */
    public static function staff(): array
    {
        $res = self::http()->get(self::url('api/v1/website/staff'));
        if (!$res->successful()) {
            throw new \RuntimeException($res->json('message') ?: 'The portal did not return the staff list (' . $res->status() . ').');
        }
        return (array) $res->json('data');
    }

    /**
     * Signs an admin in with their portal account. Returns the user
     * (id, name, email, avatar_url) or throws with a message to show.
     * The portal token is revoked straight away — the website keeps its own session.
     */
    public static function signIn(string $login, string $password): array
    {
        if (!self::configured()) throw new \RuntimeException('The website is not connected to a portal yet (PORTAL_URL in .env).');

        try {
            $res = Http::acceptJson()->timeout(15)->post(self::url('api/v1/auth/login'), [
                'login' => $login, 'password' => $password, 'device_name' => 'School website admin',
            ]);
        } catch (\Throwable $e) {
            throw new \RuntimeException('Could not reach the school portal. Please try again shortly.');
        }

        if (!$res->successful()) {
            throw new \RuntimeException($res->json('message') ?: 'Sign-in failed.');
        }

        $token = $res->json('data.token');
        $user = (array) $res->json('data.user');

        // Fresh abilities (the login reply carries them too).
        $abilities = (array) ($user['abilities'] ?? []);
        $mustChange = !empty($user['must_change_password']);

        // Revoke the token: the website does not act on the portal as this user.
        if ($token) {
            try { Http::acceptJson()->withToken($token)->timeout(8)->post(self::url('api/v1/auth/logout')); } catch (\Throwable $e) {}
        }

        if ($mustChange) {
            throw new \RuntimeException('Please sign in to the portal first and change your temporary password.');
        }
        if (empty($abilities['website.manage'])) {
            throw new \RuntimeException('Your portal account is not allowed to manage the website. Ask the portal admin for the "Manage website" permission.');
        }

        return [
            'id'     => $user['id'] ?? null,
            'name'   => $user['name'] ?? $login,
            'email'  => $user['email'] ?? null,
            'avatar' => $user['avatar_url'] ?? null,
        ];
    }
}
