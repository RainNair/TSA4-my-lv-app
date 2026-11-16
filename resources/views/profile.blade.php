@extends('layouts.app')
@section('content')<div class="panel"><h1>Profile</h1>@if($user)<p><strong>Name:</strong> {{ $user->name }}</p><p><strong>Email:</strong> {{ $user->email }}</p><p class="muted">This page is publicly viewable as required by the assessment.</p>@else<p>No profile record is available yet.</p>@endif</div>@endsection
