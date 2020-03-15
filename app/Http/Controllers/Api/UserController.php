<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function listAll()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function listOne(Request $request, User $user)
    {
        return response()->json($user);
    }
}
