<?php

use Illuminate\Support\Facades\Route;

class Task {
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new Task(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];

// Welcome URL
Route::get('/', function ()use($tasks) {
    return view('index', [
        'tasks' => $tasks,
    ]);
})  -> name('welcome');

// Greeting URL
Route::get('/hello', function () {
    return "Hello world!";
}) -> name('greeting');

// Greeting by name
Route::get("/hello/{name}", function ($name) {
    return 'Hello' . $name . '!';
}) -> name('greeting by name');

// Redirecting URL by name
Route::get('/hallo', function() {
    return redirect() -> route('greeting');
});

Route::fallback(function() {
    return view('404');
}) -> name('404');
