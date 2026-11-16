@extends('layouts.app')
@section('content')
<div class="panel"><h1>Tasks for Today</h1><p class="muted">{{ now()->format('F j, Y') }}</p>
<table><thead><tr><th>Title</th><th>Description</th><th>Status</th></tr></thead><tbody>
@forelse($tasks as $task)<tr><td><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a></td><td>{{ $task->description ?: '—' }}</td><td>{{ ucfirst($task->status) }}</td></tr>@empty<tr><td colspan="3">No tasks scheduled for today.</td></tr>@endforelse
</tbody></table></div>
@endsection
