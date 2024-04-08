<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/todolist-app', function () {
    return view('todo.index');
})->name('index');

Route::get('/todolist', \App\Http\Controllers\Todolist\TodolistController::class)
->name('todolist');

Route::get('addtodo-page',\App\Http\Controllers\Todolist\AddTodoPageController::class)
->name('addtodo-page');

Route::post('todo/addtodo',\App\Http\Controllers\Todolist\AddTodoController::class)
->name('addtodo');

Route::get('edittodo', \App\Http\Controllers\Todolist\EditTodoController::class)
->name('edittodo');

Route::get('adminlogin', App\Http\Controllers\Todolist\AdminloginController::class)
->name('adminlogin');

Route::get('userlist', App\Http\Controllers\Todolist\UserlistController::class)
->name('userlist');

Route::get('restoretodo', App\Http\Controllers\Todolist\RestoreTodo::class)
->name('restoretodo');

Route::get('userinfo', App\Http\Controllers\Todolist\UserInfoController::class)
->name('userinfo');

require __DIR__.'/auth.php';
