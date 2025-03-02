<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', function () {
    $tasks = Task::all();
    dd($tasks[0]->title);
    // return view('welcome');
});
