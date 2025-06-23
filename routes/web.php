<?php

use Illuminate\Support\Facades\Route;

use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use Illuminate\Http\Response;

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
        public DateTime $updated_at,
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
        'Task 2 long description',
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
        'Task 4 long description',
        false,
        TaskPriority::LOW,
        TaskStatus::TO_DO,
        new Datetime('2023-03-04 12:00:00'),
        new Datetime('2023-03-04 12:00:00')
    ),
];

Route::get('/', function () use ($tasks) {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () use ($tasks) {
    return view('index', [
        'name' => 'John Doe',
        'tasks' => $tasks
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) use ($tasks) {
    $task = collect($tasks)->firstWhere('id', $id);
    // $task = collect($tasks)->first(function ($value) use ($id) {
    //     return $value->id === (int)$id;
    // });

    if (!$task) {
        abort(Response::HTTP_NOT_FOUND);
    }

    return view('task-detail', [
        'task' => $task,
    ]);
})->name('tasks.show');

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
