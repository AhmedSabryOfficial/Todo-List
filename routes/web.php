<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('welcome');


Route::get('/tasks', [TaskController::class, 'index'])->middleware('auth')->name('tasks');
Route::post('/tasks', [TaskController::class, 'create'])->middleware('auth')->name('tasks.create');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name("login.post");

Route::get('/register', [AuthController::class, 'register'])->name("register");
Route::post('/register', [AuthController::class, 'registerPost'])->name("register.post");

// 1- we need a new route
// 2- controller for the logic of the view
// 3- defining a view
// 4- removing any static data