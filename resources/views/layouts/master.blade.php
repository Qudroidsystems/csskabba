{{-- Website admin layout (the public site uses resources/views/website/layout.blade.php). --}}
@php
    $admin = session('website_admin', []);
    $school = \App\Services\Website\WebsiteContent::school();
    $unread = 0;
    try { $unread = \App\Models\Website\WebsiteMessage::whereNull('read_at')->where('type', '!=', 'newsletter')->count(); } catch (\Throwable $e) {}
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">
    <title>{{ $pagetitle ?? 'Website admin' }} — {{ $school->name }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('website/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('website/admin.css') }}?v=1" rel="stylesheet">
</head>
<body>
<header class="adm-top">
    <div class="container-fluid d-flex align-items-center gap-3">
        <a href="{{ route('website.admin.index') }}" class="adm-brand">
            @if($school->logo)<img src="{{ $school->logo }}" alt="">@endif
            <span><b>{{ $school->name }}</b><small>Website admin</small></span>
        </a>
        <div class="ms-auto d-flex align-items-center gap-2">
            <a href="{{ route('website.admin.messages') }}" class="adm-icon" title="Messages"><i class="ri-mail-line"></i>@if($unread)<span>{{ $unread }}</span>@endif</a>
            <a href="{{ route('site.home') }}" target="_blank" class="btn btn-sm btn-light d-none d-sm-inline-flex"><i class="ri-external-link-line me-1"></i>View website</a>
            <a href="{{ \App\Services\Website\WebsiteContent::portalUrl() }}" target="_blank" class="btn btn-sm btn-light d-none d-md-inline-flex"><i class="ri-dashboard-line me-1"></i>Portal</a>
            <div class="dropdown">
                <button class="adm-user dropdown-toggle" data-bs-toggle="dropdown">
                    @if(!empty($admin['avatar']))<img src="{{ $admin['avatar'] }}" alt="" onerror="this.replaceWith(Object.assign(document.createElement('i'), {className: 'ri-user-3-line'}))">@else<i class="ri-user-3-line"></i>@endif
                    <span class="d-none d-sm-inline">{{ $admin['name'] ?? 'Admin' }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <span class="dropdown-item-text small text-muted">Signed in with the school portal<br>{{ $admin['email'] ?? '' }}</span>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="dropdown-item"><i class="ri-logout-box-r-line me-1"></i>Sign out</button></form>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<script src="{{ asset('website/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
