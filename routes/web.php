<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatisticsController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//users routes
Route::get('/users', [UserController::class, 'index'])->name('users.index');
// task routes
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
// Statistics route
Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
