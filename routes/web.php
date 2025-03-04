<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', function () {
    return view('tasks');
});


Route::get('/tasks', [TaskController::class, 'index']);


// 1- we need a new route
// 2- controller for the logic of the view
// 3- defining a view
// 4- removing any static data