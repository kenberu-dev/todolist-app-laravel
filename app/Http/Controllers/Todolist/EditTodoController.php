<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use App\Http\Requests\Todolist\EditTodoRequest;
use App\Models\Todolist;

class EditTodoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(EditTodoRequest $request)
    {
        $todo = Todolist::where('id', $request->id())->firstOrFail();
        $todo->content  = $request->content();
        $todo->deadline = $request->deadline();
        $todo->save();
        return redirect()
                ->route('todolist');
    }
}
