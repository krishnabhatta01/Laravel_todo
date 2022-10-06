<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');

Route::get('/todos/create', [TodoController::class, 'create']);
Route::post('/todos/create', [TodoController::class, 'store']);

Route::get('/todos/edit/{todo}', [TodoController::class, 'edit']);
Route::patch('/todos/update/{todo}', [TodoController::class, 'update'])->name('todo.update');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
