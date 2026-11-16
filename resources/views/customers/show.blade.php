@extends('layouts.app')
@section('content')<div class="panel"><h1>{{ $customer->full_name }}</h1><p>Email: {{ $customer->email }}</p><p>Phone: {{ $customer->phone ?: '—' }}</p><a href="{{ route('customers.edit', $customer) }}">Edit customer</a></div>@endsection
