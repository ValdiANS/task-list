<?php

use App\Enums\TaskPriority;
use App\Enums\TaskStatus;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Route;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

// class Task
// {
//     public function __construct(
//         public int $id,
//         public string $title,
//         public string $description,
//         public ?string $long_description,
//         public bool $completed,
//         public TaskPriority $priority,
//         public TaskStatus $status,
//         public DateTime $created_at,
//         public DateTime $updated_at,
//     ) {}
// }

// $tasks = [
//     new Task(
//         1,
//         'Buy groceries',
//         'Task 1 description',
//         'Task 1 long description',
//         false,
//         TaskPriority::HIGH,
//         TaskStatus::IN_PROGRESS,
//         new Datetime('2023-03-01 12:00:00'),
//         new Datetime('2023-03-01 12:00:00')
//     ),
//     new Task(
//         2,
//         'Sell old stuff',
//         'Task 2 description',
//         'Task 2 long description',
//         false,
//         TaskPriority::MEDIUM,
//         TaskStatus::TO_DO,
//         new Datetime('2023-03-02 12:00:00'),
//         new Datetime('2023-03-02 12:00:00')
//     ),
//     new Task(
//         3,
//         'Learn programming',
//         'Task 3 description',
//         'Task 3 long description',
//         true,
//         TaskPriority::HIGH,
//         TaskStatus::COMPLETED,
//         new Datetime('2023-03-03 12:00:00'),
//         new Datetime('2023-03-03 12:00:00')
//     ),
//     new Task(
//         4,
//         'Take dogs for a walk',
//         'Task 4 description',
//         'Task 4 long description',
//         false,
//         TaskPriority::LOW,
//         TaskStatus::TO_DO,
//         new Datetime('2023-03-04 12:00:00'),
//         new Datetime('2023-03-04 12:00:00')
//     ),
// ];

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {

    // $tasks = Task::all();
    $tasks = Task::latest()->get();
    // $tasks = Task::latest()->where('completed', true)->get();

    return view('index', [
        'name' => 'John Doe',
        'tasks' => $tasks,
    ]);
})->name('tasks.index');

// Route::post('/tasks', function (Request $request) {
Route::post('/tasks', function (TaskRequest $request) {
    // dd('We have reached the store route!');
    // dd($request->all());

    // $validationResult = $request->validate([
    //     'title' => 'required|max:256',
    //     'description' => 'required',
    //     'longDescription' => 'required',
    //     'priority' => [Rule::enum(TaskPriority::class)],

    //     'status' => [
    //         Rule::enum(TaskStatus::class),
    //         function (string $attribute, mixed $value, Closure $fail) use ($request) {
    //             if ($request->boolean('completed') && $value !== TaskStatus::COMPLETED->value) {
    //                 $fail('Status must be COMPLETED when completed is true.');
    //             }
    //         }
    //     ],

    //     'completed' => [
    //         'accepted_if:status,' . TaskStatus::COMPLETED->value,
    //     ],
    // ]);

    $newTask = Task::create([
        'title' => $request->title,
        'description' => $request->description,
        'long_description' => $request->longDescription,
        'status' => $request->status,
        'priority' => $request->priority,
        'completed' => (bool) $request->completed,
    ]);

    // $request->session()->flash('status', 'Successfully create new task!');
    return redirect()->route('tasks.show', ['id' => $newTask->id])->with('status', 'Successfully create new task!');

    // return redirect()->route('tasks.show', ['id' => $newTask->id]);
})->name('tasks.store');

Route::view('/tasks/create', 'create-task')->name('tasks.create');

Route::get('/tasks/{id}', function ($id) {
    // $task = collect($tasks)->firstWhere('id', $id);
    // $task = collect($tasks)->first(function ($value) use ($id) {
    //     return $value->id === (int)$id;
    // });

    // $task = Task::where('id', $id)->first();

    // Retrieve a model by its primary key
    $task = Task::findOrFail($id);

    // if (!$task) {
    //     abort(Response::HTTP_NOT_FOUND);
    // }

    return view('task-detail', [
        'task' => $task,
    ]);
})->name('tasks.show');

// assuming the {task} is the primary key, if the callback function parameter called this way,
// this will automatically inject the task into the $task variable, so didnt need to fetch it manually.
// If the primary key doesnt exist in tht tasks table, it will return error 404 page.
Route::get('/tasks/{task}/edit', function (Task $task) {
    return view('edit-task', [
        'task' => $task,
    ]);
})->name('tasks.edit');

Route::put('/tasks/{task}', function (TaskRequest $request, Task $task) {
    $data = $request->validated();

    // $task->title = $request->title;
    // $task->description = $request->description;
    // $task->long_description = $request->longDescription;
    // $task->priority = $request->priority;
    // $task->status = $request->status;
    // $task->completed = $request->boolean('completed');

    // $task->save();

    // $task->update($request->validated());
    $task->update([
        'title' => $request->safe()->title,
        'description' => $request->safe()->description,
        'long_description' => $request->safe()->longDescription,
        'status' => $request->safe()->status,
        'priority' => $request->safe()->priority,
        'completed' => (bool) $request->safe()->completed,
    ]);

    // $request->flash('status', "Successfully edit {$request->title} task!");

    return redirect()
        ->route('tasks.show', ['id' => $task->id])
        ->with('status', "Successfully edit {$request->title} task!");
})->name('tasks.update');

Route::get('tasks/{task}/delete', function (Task $task) {
    return view('delete-task', ['task' => $task]);
})->name('tasks.delete-page');

Route::delete('tasks/{task}', function (Task $task) {
    $task->delete();

    return redirect()
        ->route('tasks.index')
        ->with('status', "Successfully delete {$task->title}!");
})->name('tasks.destroy');


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
