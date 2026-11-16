@extends('layouts.app')
@section('content')
<div class="auth-card"><h1>Log in</h1><p class="muted">Sign in to manage tasks.</p>
<form method="POST" action="{{ route('login') }}">@csrf
<label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
<label for="password">Password</label><input id="password" type="password" name="password" required>
<label class="checkbox"><input type="checkbox" name="remember"> Remember me</label>
<div class="form-actions"><button type="submit">Log in</button><a href="{{ route('register') }}">Create an account</a></div>
</form></div>
@endsection
