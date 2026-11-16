<label for="title">Title</label><input id="title" name="title" value="{{ old('title', $task->title ?? '') }}" required>
<label for="description">Description</label><textarea id="description" name="description" rows="5">{{ old('description', $task->description ?? '') }}</textarea>
<label for="task_date">Task date</label><input id="task_date" type="date" name="task_date" value="{{ old('task_date', isset($task) ? $task->task_date->format('Y-m-d') : '') }}" required>
<label for="status">Status</label><select id="status" name="status"><option value="pending" @selected(old('status', $task->status ?? 'pending') === 'pending')>Pending</option><option value="done" @selected(old('status', $task->status ?? 'pending') === 'done')>Done</option></select>
<div class="form-actions"><button type="submit">{{ $submitLabel }}</button><a href="{{ route('tasks.index') }}">Cancel</a></div>
