<?php

use Illuminate\Support\Facades\Route;

use App\Enums\TaskPriority;
use App\Enums\TaskStatus;

class Task
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public ?string $long_description,
        public bool $completed,
        public TaskPriority $priority,
        public TaskStatus $status,
        public DateTime $created_at,
        public DateTime $update_at,
    ) {}
}

$tasks = [
    new Task(
        1,
        'Buy groceries',
        'Task 1 description',
        'Task 1 long description',
        false,
        TaskPriority::HIGH,
        TaskStatus::IN_PROGRESS,
        new Datetime('2023-03-01 12:00:00'),
        new Datetime('2023-03-01 12:00:00')
    ),
    new Task(
        2,
        'Sell old stuff',
        'Task 2 description',
        null,
        false,
        TaskPriority::MEDIUM,
        TaskStatus::TO_DO,
        new Datetime('2023-03-02 12:00:00'),
        new Datetime('2023-03-02 12:00:00')
    ),
    new Task(
        3,
        'Learn programming',
        'Task 3 description',
        'Task 3 long description',
        true,
        TaskPriority::HIGH,
        TaskStatus::COMPLETED,
        new Datetime('2023-03-03 12:00:00'),
        new Datetime('2023-03-03 12:00:00')
    ),
    new Task(
        4,
        'Take dogs for a walk',
        'Task 4 description',
        null,
        false,
        TaskPriority::LOW,
        TaskStatus::TO_DO,
        new Datetime('2023-03-04 12:00:00'),
        new Datetime('2023-03-04 12:00:00')
    ),
];

Route::get('/', function () use ($tasks) {
    return view('index', [
        'name' => 'John Doe',
        'tasks' => $tasks
    ]);
})->name('tasks.index');

Route::get('/task/{id}', function ($id) {
    return "{$id}";
})->name('tasks.show');

//

Route::get('/hello', function () {
    return 'Hello World!';
})->name('hello');

Route::get('/greet/{name}', function ($name) {
    return "Greetings " . ucwords($name) . "!";
})->name('greet');

Route::get('/dynamic/{id}', function ($id) {
    return "Dynamic ID: {$id}";
});

Route::get('/hi', function () {
    // return redirect('/hello');

    // redirect to route name instead of exact url
    return redirect()->route('hello');
});

Route::fallback(function () {
    return '404 Page';
});
