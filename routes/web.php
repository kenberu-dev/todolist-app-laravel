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

Route::get('/todolist', function() {
    return view('todo.todolist');
})->name('todolist');

Route::get('addtodo', function() {
    return view('todo.addtodo');
})->name('addtodo');

Route::get('edittodo', function() {
    return view('todo.edittodo');
})->name('edittodo');

Route::get('adminlogin', function() {
    return view('todo.adminlogin');
})->name('adminlogin');

Route::get('userlist', function() {
    return view('todo.userlist');
})->name('userlist');

Route::get('restoretodo', function() {
    return view('todo.restoretodo');
})->name('restoretodo');

Route::get('userinfo', function() {
    return view('todo.userinfo');
})->name('userinfo');

require __DIR__.'/auth.php';
