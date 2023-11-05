<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = [
            'user A',
            'user B',
            'user C',
        ];

        return view('index')
            ->with(['users' => $users]);
    }
}
