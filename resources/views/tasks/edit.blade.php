@extends('layouts.app')
@section('content')<div class="panel"><h1>Edit Task</h1><form method="POST" action="{{ route('tasks.update', $task) }}">@csrf @method('PUT') @include('tasks._form', ['submitLabel' => 'Update task'])</form></div>@endsection
