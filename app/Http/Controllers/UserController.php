<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users = [
        'user A',
        'user B',
        'user C',
    ];

    public function index()
    {

        return view('index')
            ->with(['users' => $this->users]);
    }

    public function show($id)
    {
        return view('show')
            ->with(['user' => $this->user[$id]]);
    }
}
