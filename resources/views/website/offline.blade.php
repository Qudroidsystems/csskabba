@php $s = fn ($k, $d = null) => (isset($site[$k]) && $site[$k] !== '') ? $site[$k] : $d; @endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $school->name }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;700&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { margin: 0; min-height: 100vh; display: grid; place-items: center; font-family: 'Source Sans 3', system-ui, sans-serif; color: #1c2430;
               background: linear-gradient(135deg, {{ $s('secondary_color', '#0B3D2E') }}, #061f17); padding: 16px; box-sizing: border-box; }
        .box { background: #fff; border-radius: 24px; padding: 40px 32px; max-width: 460px; width: 100%; text-align: center; box-shadow: 0 30px 60px -20px rgba(0,0,0,.5); }
        img { height: 72px; margin-bottom: 14px; } h1 { font-family: Outfit, sans-serif; font-size: 1.6rem; margin: 0 0 8px; }
        p { color: #5b6574; line-height: 1.6; margin: 0 0 22px; }
        a { display: inline-block; background: {{ $s('primary_color', '#AE152D') }}; color: #fff; text-decoration: none; padding: 12px 26px; border-radius: 999px; font-weight: 600; }
    </style>
</head>
<body>
    <div class="box">
        @if($school->logo)<img src="{{ $school->logo }}" alt="">@endif
        <h1>{{ $school->name }}</h1>
        <p>Our website is being updated and will be back soon. Parents, students and staff can still use the school portal.</p>
        <a href="{{ \App\Services\Website\WebsiteContent::portalUrl('login') }}">Go to the portal</a>
    </div>
</body>
</html>
