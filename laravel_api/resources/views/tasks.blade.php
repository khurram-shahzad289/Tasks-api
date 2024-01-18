<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<p style="font-size: large">
{{--<div style=" font-size: 24px; display: flex; gap: 16px;  justify-items: center">--}}
<div class="flex justify-center bg-red-500">
    <p>id</p>
    <p>name</p>
    <p>is_completed</p>
    <p>created_at</p>
    <p>updated_at</p>
</div>
<h1 class=" ">
    Hello world!
</h1>

    @foreach($tasks as $task)

        <div style=" font-size: 24px; display: flex; gap: 16px; justify-content: space-evenly; justify-items: center; text-align: center">
            <p>{{ $task['id'] }}</p>
            <p>{{ $task['name'] }}</p>
            <p style="display: flex; justify-content: center">{{ $task['is_completed'] }}</p>
            <p>{{ $task['created_at'] }}</p>
            <p>{{ $task['updated_at'] }}</p>
        </div>
    @endforeach


</body>

</html>
