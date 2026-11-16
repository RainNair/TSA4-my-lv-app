@extends('layouts.app')
@section('content')<div class="panel"><h1>{{ $user->display_name }}</h1><p>Username: {{ $user->username ?: '—' }}</p><p>Email: {{ $user->email }}</p><a href="{{ route('users.edit', $user) }}">Edit user</a></div>@endsection
