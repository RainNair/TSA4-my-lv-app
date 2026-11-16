@extends('layouts.app')
@section('content')
<div class="auth-card"><h1>Register</h1><p class="muted">Create an account to manage the POS records.</p>
<form method="POST" action="{{ route('register') }}">@csrf
<label for="name">Name</label><input id="name" name="name" value="{{ old('name') }}" required autofocus>
<label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email') }}" required>
<label for="password">Password</label><input id="password" type="password" name="password" required>
<label for="password_confirmation">Confirm password</label><input id="password_confirmation" type="password" name="password_confirmation" required>
<div class="form-actions"><button type="submit">Register</button><a href="{{ route('login') }}">Already registered?</a></div>
</form></div>
@endsection
