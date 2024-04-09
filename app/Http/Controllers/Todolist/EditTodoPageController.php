<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use App\Models\Todolist;
use Illuminate\Http\Request;

class EditTodoPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $todoId = (int) $request->route('todoId');
        $todo   = Todolist::where('id', $todoId)->firstOrFail();
        return view('todo.edittodo')->with('todo', $todo);
    }
}
