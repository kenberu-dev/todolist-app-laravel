<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use App\Http\Requests\Todolist\AddTodoRequest;
use App\Models\Todolist;
use Dotenv\Validator;

class AddTodoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AddTodoRequest $request)
    {
        $todo = new Todolist();
        $todo->content = $request->content();
        $todo->deadline = $request->deadline();
        $todo->save();
        return redirect()->route('todolist');
    }
}
