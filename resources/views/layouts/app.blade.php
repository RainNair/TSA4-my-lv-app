<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Laravel POS' }}</title>
    <style>
        :root { font-family: Arial, sans-serif; color: #1f2937; background: #f3f4f6; }
        body { margin: 0; } nav { background: #172554; padding: 16px 8%; display:flex; gap:22px; align-items:center; }
        nav strong, nav a { color:#fff; text-decoration:none; } nav strong { margin-right:auto; }
        main { max-width: 1050px; margin: 35px auto; padding: 0 20px; } .panel, .auth-card { background:#fff; padding:24px; border-radius:10px; box-shadow:0 2px 12px #00000012; } .auth-card { max-width: 480px; margin: 0 auto; }
        .toolbar { display:flex; justify-content:space-between; align-items:center; gap:15px; } h1 { margin-top:0; }
        a.button, button { background:#2563eb; color:white; border:0; border-radius:6px; padding:10px 14px; text-decoration:none; cursor:pointer; font-size:14px; }
        table { width:100%; border-collapse:collapse; margin-top:20px; } th,td { text-align:left; padding:12px; border-bottom:1px solid #e5e7eb; vertical-align:middle; }
        th { background:#eff6ff; } label { display:block; font-weight:bold; margin-top:15px; } input { width:100%; box-sizing:border-box; padding:10px; margin-top:6px; border:1px solid #cbd5e1; border-radius:6px; } .checkbox { display:flex; align-items:center; gap:8px; font-weight:normal; } .checkbox input { width:auto; margin:0; }
        .form-actions { margin-top:22px; display:flex; gap:10px; } .muted { color:#64748b; } .success { background:#dcfce7; color:#166534; padding:12px; border-radius:6px; margin-bottom:18px; }
        .errors { background:#fee2e2; color:#991b1b; padding:12px 30px; border-radius:6px; margin-bottom:18px; }
    </style>
</head>
<body>
<nav><strong>Tasks for Today</strong><a href="{{ route('welcome') }}">Today</a><a href="{{ route('tasks.index') }}">Tasks</a><a href="{{ route('profile') }}">Profile</a><a href="{{ route('about') }}">About</a>@auth<span style="color:#bfdbfe">{{ auth()->user()->name }}</span><form method="POST" action="{{ route('logout') }}" style="display:inline">@csrf<button type="submit">Log out</button></form>@else<a href="{{ route('login') }}">Log in</a><a href="{{ route('register') }}">Register</a>@endauth</nav>
<main>
    @if(session('success')) <div class="success">{{ session('success') }}</div> @endif
    @if($errors->any()) <div class="errors"><strong>Please correct the following:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div> @endif
    @yield('content')
</main>
</body>
</html>
