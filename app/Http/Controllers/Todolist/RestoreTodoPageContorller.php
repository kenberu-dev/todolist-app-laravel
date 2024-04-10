<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestoreTodoPageContorller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user_id = Auth::id();
        $todolists = Todolist::where([['user_id', '=', $user_id],
                                      ['status', '=', 1]])->get();
        return view('todo.restoretodo')->with(['todolists' => $todolists]);
    }
}
