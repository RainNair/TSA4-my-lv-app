<!doctype html>
<html lang="en"><body>
<h1>Task completed</h1>
<p>The following task was marked as done:</p>
<p><strong>{{ $task->title }}</strong></p>
@if($task->description)<p>{{ $task->description }}</p>@endif
<p>Task date: {{ $task->task_date->format('F j, Y') }}</p>
</body></html>
