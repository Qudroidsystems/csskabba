<?php

namespace App\Http\Middleware;

use App\Services\Website\WebsiteContent as W;
use Closure;
use Illuminate\Http\Request;

/** While the admin has switched the website off, visitors see a short "back soon" page (admins can still preview). */
class WebsiteEnabled
{
    public function handle(Request $request, Closure $next)
    {
        if (W::enabled() || $request->session()->has('website_admin')) return $next($request);
        return response()->view('website.offline', [], 503);
    }
}
