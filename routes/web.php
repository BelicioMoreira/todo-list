<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('todo.index');
Route::get('/create', [TaskController::class, 'create'])->name('todo.create');
Route::post('/create',  [TaskController::class, 'store'])->name('todo.store');
Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('todo.edit');
Route::put('/{task}/edit', [TaskController::class, 'update'])->name('todo.update');
Route::delete('/{task}', [TaskController::class, 'destroy'])->name('todo.destroy');
Route::get('/search', [TaskController::class, 'search'])->name('todo.index');

