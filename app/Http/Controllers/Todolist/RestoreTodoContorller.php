<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use App\Models\Todolist;
use Illuminate\Http\Request;

class RestoreTodoContorller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $todoId = $request->route('todoId');
        $todo   = Todolist::where('id', $todoId)->firstOrFail();
        $todo->update(['status' => 0]);
        return redirect()->route('restoretodo-page');
    }
}
