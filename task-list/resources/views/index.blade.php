@extends('layout.app')

@section('title', 'The list of tasks')

@section('content')
    <div class="task-list-container">
        @isset($tasks)
            @if (count($tasks))
                @foreach ($tasks as $task)
                    <div class="task-item">
                        <a href="{{ route('tasks.task', ['id' => $task->id]) }}">{{ $task->title }}</a>
                    </div>
                @endforeach
            @else
                <div class="no-tasks">There are no tasks!</div>
            @endif
        @else
            <div class="no-tasks">No tasks to display.</div>
        @endisset
    </div>
@endsection