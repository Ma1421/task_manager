{{-- resources/views/tasks/create.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>
    <h1>Create New Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <label for="description">Description:</label>
        <textarea name="description"></textarea>
        <button type="submit">Create Task</button>
    </form>
</body>
</html>
