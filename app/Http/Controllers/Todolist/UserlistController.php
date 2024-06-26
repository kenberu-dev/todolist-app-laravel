<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserlistController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $users = User::all();
        return view('todo.userlist')->with(['users' => $users]);
    }
}
