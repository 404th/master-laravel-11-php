<h1>
    The list of tasks
</h1>

@isset($tasks)
    <div>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <div>
                    <h5><?= $task -> $title ?></h5>
                    <h5>Description: </h5>
                    <p><?= $task -> $description ?></p>
                    <h5>Long desctiption: </h5>
                    <p>Description: <?= @isset( $task -> $long_description ) ? $task -> $long_description : '...' ?></p>
                    <p>Completed: <?= $task -> $completed ? '🟢' : '🔴' ?></p>
                    <p>Created at: <?= $task -> $created_at ?></p>
                    <p>Updated at: <?= $task -> $updated_at ?></p>
                </div>
            @endforeach
        @else
            <div>There are no tasks!</div>
        @endif
    </div>
@endisset