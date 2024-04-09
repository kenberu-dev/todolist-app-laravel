<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todolist;
use Illuminate\Support\Facades\Auth;

class TodolistController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user_id = Auth::id();
        $user_name = Auth::user()->name;
        $todolists = Todolist::where('user_id', $user_id)->get();
        //dd($todolists);
        return view('todo.todolist')->with([
            'user_name'   => $user_name,
            'todolists' => $todolists]);
    }
}
