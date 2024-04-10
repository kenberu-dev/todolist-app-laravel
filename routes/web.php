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

Route::get('/todolist-app', \App\Http\Controllers\Todolist\IndexController::class)
->name('index');

Route::get('adminlogin', App\Http\Controllers\Todolist\AdminloginController::class)
->name('adminlogin');

Route::middleware('auth')->group(function (){
    Route::get('todolist', \App\Http\Controllers\Todolist\TodolistController::class)
    ->name('todolist');

    Route::put('todo/checktodo/{todoId}', \App\Http\Controllers\Todolist\CheckTodoController::class)
    ->name('checktodo')->where('todoId', '[0-9]+');
    
    Route::get('addtodo-page',\App\Http\Controllers\Todolist\AddTodoPageController::class)
    ->name('addtodo-page');
    
    Route::post('todo/addtodo',\App\Http\Controllers\Todolist\AddTodoController::class)
    ->name('addtodo');

    Route::get('edittodo-page/{todoId}', \App\Http\Controllers\Todolist\EditTodoPageController::class)
    ->name('edittodo-page')->where('todoId', '[0-9]+');
    
    Route::put('todo/edittodo/{todoId}', \App\Http\Controllers\Todolist\EditTodoController::class)
    ->name('edittodo')->where('todoId', '[0-9]+');
    
    Route::get('restoretodo-page', App\Http\Controllers\Todolist\RestoreTodoPageContorller::class)
    ->name('restoretodo-page');

    Route::put('todo/restoretodo/{todoId}', \App\Http\Controllers\Todolist\RestoreTodoContorller::class)
    ->name('restoretodo')->where('todoId', '[0-9]+');

    Route::delete('todo/delete/{todoId}', \App\Http\Controllers\Todolist\DeleteTodoController::class)
    ->name('deletetodo');
    
    Route::get('userinfo-page', App\Http\Controllers\Todolist\UserInfoController::class)
    ->name('userinfo-page');
    
    Route::get('userlist', App\Http\Controllers\Todolist\UserlistController::class)
    ->name('userlist');
});

Route::delete('user/delete', \App\Http\Controllers\Todolist\WithdrawalController::class)
->name('withdrawal');

require __DIR__.'/auth.php';
