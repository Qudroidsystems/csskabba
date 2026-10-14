<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/** Website admin pages: signed in with a portal account that may manage the website (see AdminAuthController). */
class EnsureWebsiteAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('website_admin')) {
            if ($request->expectsJson()) return response()->json(['message' => 'Please sign in again.'], 401);
            return redirect()->guest(route('admin.login'));
        }
        return $next($request);
    }
}
