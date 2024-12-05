@extends('layout.app')

@section('title', $task->title)

@section('content')
    <div class="task-card">
        <p>Task ID: <strong>{{ $task -> id }}</strong></p>
        <p>Description: {{ $task -> description }}</p>
        @if ($task -> long_description)
            <p>Description: {{ $task -> long_description }}</p>
        @endif
        <p>Completed: <strong>{{ $task -> completed ? "Yes" : "No" }}</strong></p>
        <p>Created At: {{ $task -> created_at }}</p>
        <p>Updated At: {{ $task -> updated_at }}</p>
        <a href="{{ url('/') }}">← Home</a>
    </div>
@endsection