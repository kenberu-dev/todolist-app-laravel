<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserlistController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('userlist');
    }
}
