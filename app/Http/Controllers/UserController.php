<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('index')
            ->with(['users' => $users]);
    }

    public function show($id)
    {
        return view('users.show')
            ->with(['user' => $this->users[$id]]);
    }
}
