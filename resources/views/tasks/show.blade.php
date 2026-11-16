@extends('layouts.app')
@section('content')<div class="panel"><h1>{{ $task->title }}</h1><p><strong>Status:</strong> {{ ucfirst($task->status) }}</p><p><strong>Date:</strong> {{ $task->task_date->format('F j, Y') }}</p><p>{{ $task->description ?: 'No description provided.' }}</p>@auth<a href="{{ route('tasks.edit', $task) }}">Edit task</a>@endauth</div>@endsection
