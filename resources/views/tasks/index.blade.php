@extends('layouts.app')
@section('content')
<div class="panel"><div class="toolbar"><div><h1>Task List</h1><p class="muted">All active tasks.</p></div>@auth<a class="button" href="{{ route('tasks.create') }}">New Task</a>@endauth</div>
<table><thead><tr><th>Title</th><th>Task date</th><th>Status</th><th>Actions</th></tr></thead><tbody>
@forelse($tasks as $task)<tr><td><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a></td><td>{{ $task->task_date->format('M j, Y') }}</td><td>{{ ucfirst($task->status) }}</td><td>@auth<a href="{{ route('tasks.edit', $task) }}">Edit</a> <form method="POST" action="{{ route('tasks.destroy', $task) }}" style="display:inline">@csrf @method('DELETE')<button type="submit" onclick="return confirm('Archive this task?')">Archive</button></form>@else<span class="muted">View only</span>@endauth</td></tr>@empty<tr><td colspan="4">No active tasks yet.</td></tr>@endforelse
</tbody></table></div>
@endsection
