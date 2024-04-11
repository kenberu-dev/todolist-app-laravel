<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $userId = $request->route('userId');
        $user    = User::where('id', $userId)->firstOrFail();
        $user->delete();
        return redirect()->route('userlist');
    }
}
