<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'name' => 'John Doe'
    ]);
});

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
