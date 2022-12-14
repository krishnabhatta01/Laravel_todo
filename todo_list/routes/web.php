<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\PhotoController;


//resourse routing
Route::resource('/todo', TodoController::class);

/* Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');

Route::get('/todos/create', [TodoController::class, 'create']);
Route::post('/todos/create', [TodoController::class, 'store']);

Route::get('/todos/edit/{todo}', [TodoController::class, 'edit']);
Route::patch('/todos/update/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todos/delete/{todo}', [TodoController::class, 'delete'])->name('todo.delete');
 */
Route::put('/todos/complete/{todo}', [TodoController::class, 'complete'])->name('todo.complete');
Route::put('/todos/incomplete/{todo}', [TodoController::class, 'incomplete'])->name('todo.incomplete');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
