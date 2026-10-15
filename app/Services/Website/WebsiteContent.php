<?php

namespace App\Services\Website;

use App\Models\Website\WebsitePage;
use App\Services\Portal\PortalClient;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Everything the public website needs, in one place:
 *  - the website settings the admin edits (cached),
 *  - live school data from the portal's API (name, logo, contacts, counts,
 *    classes, subjects, public calendar events) — see PortalClient,
 *  - image handling for uploads (resized, with thumbnails) and HTML cleaning
 *    for text written in the admin editor.
 */
class WebsiteContent
{
    protected const CACHE = 'website.settings.v1';

    // ── settings ────────────────────────────────────────────────────────

    public static function settings(): array
    {
        if (!Schema::hasTable('website_settings')) return [];
        return Cache::rememberForever(self::CACHE, fn () => DB::table('website_settings')->pluck('value', 'key')->all());
    }

    public static function get(string $key, $default = null)
    {
        $v = self::settings()[$key] ?? null;
        return ($v === null || $v === '') ? $default : $v;
    }

    public static function put(array $values): void
    {
        $now = now();
        foreach ($values as $k => $v) {
            DB::table('website_settings')->updateOrInsert(['key' => $k], ['value' => is_array($v) ? json_encode($v) : $v, 'updated_at' => $now, 'created_at' => $now]);
        }
        self::flush();
    }

    public static function flush(): void
    {
        Cache::forget(self::CACHE);
        Cache::forget('website.stats');
    }

    public static function enabled(): bool
    {
        return Schema::hasTable('website_settings') && self::get('enabled', '1') === '1';
    }

    // ── portal ──────────────────────────────────────────────────────────
    //
    // This website is its own Laravel app (usually on the school's main domain,
    // e.g. www.csskabba.ng). School details and live numbers come from the
    // portal's API (App\Services\Portal\PortalClient).

    /** The portal's address, e.g. https://portal.csskabba.ng/login. */
    public static function portalUrl(string $path = ''): string
    {
        $base = PortalClient::configured() ? config('portal.url') : url('/');
        return rtrim($base, '/') . ($path === '' ? '' : '/' . ltrim($path, '/'));
    }

    public static function homeUrl(): string
    {
        return route('site.home');
    }

    /** Portal feed (cached; last good copy when the portal is down). */
    public static function feed(): array
    {
        static $feed;
        return $feed ??= PortalClient::feed();
    }

    // ── school (from the portal) ────────────────────────────────────────

    public static function school(): object
    {
        static $school;
        if ($school) return $school;
        $s = (array) (self::feed()['school'] ?? []);
        $phones = $s['phones'] ?? [];
        if (is_string($phones)) $phones = preg_split('/[,;\/]+/', $phones);
        $model = ($s['score_model'] ?? 'dynamic') === 'fixed' ? 'fixed' : 'dynamic';
        return $school = (object) [
            'name'    => self::get('school_name') ?: ($s['name'] ?? config('app.name')),
            'motto'   => $s['motto'] ?? null,
            'address' => self::get('school_address') ?: ($s['address'] ?? null),
            'email'   => self::get('school_email') ?: ($s['email'] ?? null),
            'phones'  => self::get('school_phones') ? array_map('trim', preg_split('/[,;\/]+/', self::get('school_phones'))) : array_values(array_filter(array_map('trim', (array) $phones))),
            'website' => $s['website'] ?? null,
            'logo'    => self::fileUrl(self::get('logo')) ?: ($s['logo_url'] ?? null),
            'next_term_begins' => $s['next_term_begins'] ?? null,
            // The mobile app this school's portal pairs with.
            'app_name' => $model === 'fixed' ? 'TopClass Schools' : 'Vite Schools',
            'score_model' => $model,
        ];
    }

    /** Top-bar links: "Label | /path" per line (admin setting), with the standard four as default. @return array<int,array{0:string,1:string}> */
    public static function topbarLinks(): array
    {
        $raw = (string) self::get('topbar_links', "Apply | /admissions#apply\nVisit us | /contact#visit\nNews & updates | /news\nGallery | /gallery");
        $out = [];
        foreach (preg_split('/\R/', $raw) as $line) {
            [$label, $url] = array_pad(array_map('trim', explode('|', $line, 2)), 2, '');
            if ($label === '' || $url === '') continue;
            $out[] = [$label, str_starts_with($url, '/') ? url($url) : $url];
        }
        return $out;
    }

    /** A stored file path (relative to the public disk, or a full URL) as a URL. */
    public static function fileUrl(?string $path): ?string
    {
        if (!$path) return null;
        if (Str::startsWith($path, ['http://', 'https://', '//'])) return $path;
        if (Str::startsWith($path, '/')) return url($path);
        if (is_file(public_path($path))) return asset($path);
        $path = ltrim($path, '/');
        // Normal case: public/storage is the `php artisan storage:link` symlink.
        if (is_link(public_path('storage')) || is_file(public_path('storage/' . $path))) return asset('storage/' . $path);
        // Hosts where public/storage is a plain folder: stream website files through Laravel.
        if (Str::startsWith($path, 'website/') && Storage::disk('public')->exists($path)) return route('site.media', ['path' => $path]);
        return asset('storage/' . $path);
    }

    /** Live numbers for the counters strip. */
    public static function stats(): array
    {
        $st = (array) (self::feed()['stats'] ?? []);
        $n = fn ($k) => (int) ($st[$k] ?? 0);
        $founded = (int) self::get('founded_year', 0);
        return array_values(array_filter([
            $n('students') ? ['value' => $n('students'), 'label' => 'Students', 'suffix' => '+'] : null,
            $n('staff') ? ['value' => $n('staff'), 'label' => 'Teachers & staff', 'suffix' => ''] : null,
            $n('classes') ? ['value' => $n('classes'), 'label' => 'Classes', 'suffix' => ''] : null,
            $n('subjects') ? ['value' => $n('subjects'), 'label' => 'Subjects taught', 'suffix' => ''] : null,
            $founded > 1800 ? ['value' => now()->year - $founded, 'label' => 'Years of excellence', 'suffix' => '+'] : null,
        ]));
    }

    /** Class levels and subjects for the Academics page: ['levels' => [name => [classes]], 'subjects' => [..]]. */
    public static function academics(): array
    {
        $a = (array) (self::feed()['academics'] ?? []);
        $levels = collect($a['levels'] ?? [])->mapWithKeys(fn ($l) => [($l['name'] ?? 'Classes') => collect($l['classes'] ?? [])]);
        return ['levels' => $levels, 'subjects' => collect($a['subjects'] ?? [])];
    }

    /** Public calendar events from the portal as objects (title, date, end, time, location, excerpt). */
    public static function portalEvents()
    {
        return collect(self::feed()['events'] ?? [])->map(fn ($e) => (object) [
            'title'       => $e['title'] ?? '',
            'start_date'  => $e['start_date'] ?? null,
            'end_date'    => $e['end_date'] ?? null,
            'start_time'  => $e['start_time'] ?? null,
            'all_day'     => (bool) ($e['all_day'] ?? false),
            'location'    => $e['location'] ?? null,
            'description' => $e['description'] ?? null,
            'color'       => $e['color'] ?? null,
        ]);
    }

    /** Upcoming public events: website events plus the portal's public calendar. */
    public static function upcomingEvents(int $limit = 6)
    {
        $items = collect();
        if (Schema::hasTable('website_posts')) {
            $items = $items->merge(DB::table('website_posts')->where('type', 'event')->where('published', true)
                ->whereDate('event_date', '>=', today())->orderBy('event_date')->limit($limit)->get()
                ->map(fn ($e) => (object) ['title' => $e->title, 'date' => $e->event_date, 'time' => $e->event_time, 'location' => $e->location,
                                           'url' => route('site.post', $e->slug), 'excerpt' => $e->excerpt]));
        }
        $items = $items->merge(self::portalEvents()->filter(fn ($e) => $e->start_date && $e->start_date >= today()->toDateString())
            ->map(fn ($e) => (object) ['title' => $e->title, 'date' => $e->start_date, 'time' => $e->all_day ? null : $e->start_time,
                                       'location' => $e->location, 'url' => route('site.calendar'), 'excerpt' => Str::limit((string) $e->description, 140)]));
        return $items->sortBy('date')->take($limit)->values();
    }

    /** Pages grouped by menu (about, admissions, academics, life). */
    public static function menu(): array
    {
        if (!Schema::hasTable('website_pages')) return [];
        return Cache::remember('website.menu', 300, fn () => WebsitePage::where('published', true)->whereNotNull('menu')->where('menu', '!=', 'none')
            ->orderBy('sort')->orderBy('title')->get(['title', 'slug', 'menu'])->groupBy('menu')->map(fn ($g) => $g->map(fn ($p) => ['title' => $p->title, 'slug' => $p->slug])->all())->all());
    }

    // ── uploads ─────────────────────────────────────────────────────────

    /**
     * Saves an uploaded image on the public disk, scaled down to $max px on
     * the long side (and a $thumb px thumbnail when asked).
     * @return array{path:string, thumb:?string, width:int, height:int}
     */
    public static function storeImage(UploadedFile $file, string $dir, int $max = 1920, ?int $thumb = null): array
    {
        $dir = 'website/' . trim($dir, '/');
        $name = date('Ymd') . '-' . Str::random(10);
        $ext = strtolower($file->getClientOriginalExtension() ?: $file->extension() ?: 'jpg');

        $info = @getimagesize($file->getRealPath());
        if (!$info || !function_exists('imagecreatetruecolor') || in_array($ext, ['svg', 'gif'], true)) {
            $path = $file->storeAs($dir, $name . '.' . $ext, 'public');
            return ['path' => $path, 'thumb' => null, 'width' => (int) ($info[0] ?? 0), 'height' => (int) ($info[1] ?? 0)];
        }

        [$w, $h, $type] = $info;
        $src = match ($type) {
            IMAGETYPE_JPEG => @imagecreatefromjpeg($file->getRealPath()),
            IMAGETYPE_PNG  => @imagecreatefrompng($file->getRealPath()),
            IMAGETYPE_WEBP => function_exists('imagecreatefromwebp') ? @imagecreatefromwebp($file->getRealPath()) : null,
            default        => null,
        };
        if (!$src) {
            $path = $file->storeAs($dir, $name . '.' . $ext, 'public');
            return ['path' => $path, 'thumb' => null, 'width' => $w, 'height' => $h];
        }
        if ($type === IMAGETYPE_JPEG && function_exists('exif_read_data')) {
            $o = @exif_read_data($file->getRealPath())['Orientation'] ?? 1;
            if (in_array($o, [3, 6, 8], true)) {
                $src = imagerotate($src, [3 => 180, 6 => -90, 8 => 90][$o], 0);
                [$w, $h] = [imagesx($src), imagesy($src)];
            }
        }
        $keepAlpha = $type === IMAGETYPE_PNG;
        $save = function ($im, string $file) use ($keepAlpha) {
            Storage::disk('public')->makeDirectory(dirname($file));
            $full = Storage::disk('public')->path($file);
            $keepAlpha ? imagepng($im, $full, 6) : imagejpeg($im, $full, 82);
        };
        $resize = function (int $limit) use ($src, $w, $h, $keepAlpha) {
            $scale = min(1, $limit / max($w, $h));
            $nw = max(1, (int) round($w * $scale)); $nh = max(1, (int) round($h * $scale));
            $dst = imagecreatetruecolor($nw, $nh);
            if ($keepAlpha) { imagealphablending($dst, false); imagesavealpha($dst, true); }
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $nw, $nh, $w, $h);
            return [$dst, $nw, $nh];
        };

        $ext = $keepAlpha ? 'png' : 'jpg';
        [$big, $bw, $bh] = $resize($max);
        $path = "{$dir}/{$name}.{$ext}";
        $save($big, $path);
        imagedestroy($big);

        $thumbPath = null;
        if ($thumb) {
            [$small] = $resize($thumb);
            $thumbPath = "{$dir}/thumbs/{$name}.{$ext}";
            $save($small, $thumbPath);
            imagedestroy($small);
        }
        imagedestroy($src);

        return ['path' => $path, 'thumb' => $thumbPath, 'width' => $bw, 'height' => $bh];
    }

    public static function deleteFile(?string $path): void
    {
        if ($path && !Str::startsWith($path, ['http', '/'])) Storage::disk('public')->delete($path);
    }

    /** Text from the admin editor, limited to safe formatting (and YouTube embeds). */
    public static function clean(?string $html): ?string
    {
        if ($html === null || trim($html) === '') return null;
        if (!class_exists(\HTMLPurifier::class)) return strip_tags($html, '<p><br><b><strong><i><em><u><h2><h3><h4><ul><ol><li><a><img><blockquote><table><thead><tbody><tr><th><td><hr><span>');

        $config = \HTMLPurifier_Config::createDefault();
        $config->set('Cache.SerializerPath', storage_path('framework/cache'));
        $config->set('HTML.Allowed', 'p,br,b,strong,i,em,u,s,h2,h3,h4,ul,ol,li,a[href|target|title],img[src|alt|width|height],blockquote,table,thead,tbody,tr,th,td,hr,span[style],div[class],iframe[src|width|height]');
        $config->set('CSS.AllowedProperties', 'color,background-color,text-align,font-weight,font-style,text-decoration');
        $config->set('HTML.SafeIframe', true);
        $config->set('URI.SafeIframeRegexp', '%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video/)%');
        $config->set('Attr.AllowedFrameTargets', ['_blank']);
        return (new \HTMLPurifier($config))->purify($html);
    }

    public static function uniqueSlug(string $table, string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title) ?: Str::random(6);
        $slug = $base;
        $i = 2;
        while (DB::table($table)->where('slug', $slug)->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = $base . '-' . $i++;
        }
        return $slug;
    }
}
