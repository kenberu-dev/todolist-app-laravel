<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddTodoPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('todo.addtodo');
    }
}