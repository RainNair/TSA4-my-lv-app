@extends('layouts.app')
@section('content')<div class="panel"><h1>Create Task</h1><form method="POST" action="{{ route('tasks.store') }}">@csrf @include('tasks._form', ['submitLabel' => 'Save task'])</form></div>@endsection
