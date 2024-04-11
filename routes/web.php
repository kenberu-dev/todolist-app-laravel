<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use \App\Http\Controllers\Todolist\Admin\AdminRegisterController;
// use \App\Http\Controllers\Todolist\Admin\AdminLoginController;

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

// Route::group(['prefix' => 'admin'], function () {
//     // 登録
//     Route::get('register', [AdminRegisterController::class, 'create'])
//         ->name('admin.register');

//     Route::post('register', [AdminRegisterController::class, 'store']);

//     // ログイン
//     Route::get('login', [AdminLoginController::class, 'showLoginPage'])
//         ->name('admin.login');

//     Route::post('login', [AdminLoginController::class, 'login']);

//     // 以下の中は認証必須のエンドポイントとなる
//     Route::middleware(['auth:admin'])->group(function () {
//         Route::get('userlist', App\Http\Controllers\Todolist\UserlistController::class)
//         ->name('userlist');

//         Route::delete('deleteuser/{userId}', \App\Http\Controllers\Todolist\DeleteUserController::class)
//         ->name('deleteuser')->where('userId', '[0-9]+');

//         Route::post('logout', AdminLoginController::class, 'destroy')
//         ->name('admin.logout');

//     });
// });

Route::get('/todolist-app', \App\Http\Controllers\Todolist\IndexController::class)
->name('index');

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
    ->name('deletetodo')->where('todoId', '[0-9]+');
    
    Route::get('userinfo-page', App\Http\Controllers\Todolist\UserInfoController::class)
    ->name('userinfo-page');
});

Route::delete('user/delete', \App\Http\Controllers\Todolist\WithdrawalController::class)
->name('withdrawal');

require __DIR__.'/auth.php';
