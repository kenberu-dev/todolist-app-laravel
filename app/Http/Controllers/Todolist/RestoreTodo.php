<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestoreTodo extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('restoretodo');
    }
}