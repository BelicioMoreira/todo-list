<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('adicionar-tarefa', function () {
    return view('adicionar_tarefa');
});