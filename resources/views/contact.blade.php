<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @foreach ($tasks as $task)
    <ul>
        <li>{{ $task }}</li>

    </ul>
    @endforeach --}}
    <ul>
        @foreach ($tasks as $index=> $task)
        <li><a href="contact.{{ $task->id }}">{{ $tasks->name  }}</a></li>
        {{-- <li>{{ $tasks->id }}</li>
        <li>{{ $tasks->title }}</li>
        <li>{{ $tasks->name }}</li> --}}
        @endforeach
    </ul>
</body>
</html>
