<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Portal\PortalClient;
use App\Services\Website\WebsiteContent as W;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * Website admin sign-in with the school portal account: the e-mail/phone and
 * password are checked by the portal (POST /api/v1/auth/login), and only users
 * the portal allows to manage the website (permission "Manage website") get in.
 * The website keeps its own session; nothing is stored about the password.
 */
class AdminAuthController extends Controller
{
    public function form(Request $request)
    {
        if ($request->session()->has('website_admin')) return redirect()->route('website.admin.index');
        return view('admin.login', ['school' => W::school()]);
    }

    public function login(Request $request)
    {
        $data = $request->validate(['login' => 'required|string|max:150', 'password' => 'required|string|max:200']);

        try {
            $user = PortalClient::signIn($data['login'], $data['password']);
        } catch (\Throwable $e) {
            Log::info('[website] admin sign-in refused', ['login' => $data['login'], 'reason' => $e->getMessage()]);
            return back()->withInput($request->only('login'))->withErrors(['login' => $e->getMessage()]);
        }

        $request->session()->regenerate();
        $request->session()->put('website_admin', $user + ['at' => now()->toIso8601String()]);
        return redirect()->intended(route('website.admin.index'));
    }

    public function logout(Request $request)
    {
        $request->session()->forget('website_admin');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login')->with('success', 'Signed out.');
    }
}
