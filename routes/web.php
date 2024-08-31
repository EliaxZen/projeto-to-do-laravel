<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
Route::get('/task', [TaskController::class, 'create'])->name('task.create');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
