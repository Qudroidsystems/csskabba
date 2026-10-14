<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>Website admin — {{ $school->name }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('website/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('website/admin.css') }}?v=1" rel="stylesheet">
</head>
<body class="adm-login">
    <main class="adm-login-card">
        @if($school->logo)<img src="{{ $school->logo }}" alt="" class="logo">@endif
        <h1>Website admin</h1>
        <p class="text-muted">{{ $school->name }}</p>

        @if(session('success'))<div class="alert alert-success py-2 small">{{ session('success') }}</div>@endif
        @if($errors->any())<div class="alert alert-danger py-2 small">{{ $errors->first() }}</div>@endif

        <form method="POST" action="{{ route('admin.login.submit') }}">@csrf
            <div class="mb-3 text-start">
                <label class="form-label">Portal e-mail or phone</label>
                <input name="login" value="{{ old('login') }}" class="form-control form-control-lg" autocomplete="username" required autofocus>
            </div>
            <div class="mb-3 text-start">
                <label class="form-label">Password</label>
                <input name="password" type="password" class="form-control form-control-lg" autocomplete="current-password" required>
            </div>
            <button class="btn btn-primary btn-lg w-100"><i class="ri-login-box-line me-1"></i>Sign in</button>
        </form>
        <p class="small text-muted mt-3 mb-0">Use your school portal account. You need the <b>Manage website</b> permission on the portal.
            <br><a href="{{ \App\Services\Website\WebsiteContent::portalUrl('login') }}">Forgot your password? Reset it on the portal.</a></p>
    </main>
    <a href="{{ route('site.home') }}" class="adm-back"><i class="ri-arrow-left-line"></i> Back to the website</a>
</body>
</html>
