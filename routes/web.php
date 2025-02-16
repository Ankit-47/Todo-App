<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController; // Import the controller

// Home route (Showing all todos)
Route::get('/', [TodoController::class, 'index'])->name('todo.home');

// Route to show the "create todo" form
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');

// Route to store a new todo (form submission)
Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');

// Route to show the "edit todo" form
Route::get('/todo/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');

// Route to update a todo
Route::post('/todo/{id}/update', [TodoController::class, 'update'])->name('todo.update');

// Route to delete a todo
Route::get('/todo/{id}/delete', [TodoController::class, 'destroy'])->name('todo.delete');
