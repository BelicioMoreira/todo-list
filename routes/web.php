<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('todo.index');
Route::get('/create', [TaskController::class, 'create'])->name('todo.create');
Route::post('/create',  [TaskController::class, 'store'])->name('todo.store');
