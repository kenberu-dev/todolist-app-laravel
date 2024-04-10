<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use App\Models\Todolist;
use Illuminate\Http\Request;

class DeleteTodoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $todoId = $request->route('todoId');
        $todo   = Todolist::where('id', $todoId)->firstOrFail();
        $todo->delete();
        return redirect()->route('todolist');
    }
}
