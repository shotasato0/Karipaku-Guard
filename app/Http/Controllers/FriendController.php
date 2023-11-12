<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class FriendController extends Controller
{
    public function index()
    {
        $friends = Friend::latest()->get();

        return view('index')
            ->with(['friends' => $friends]);
    }

    public function show($id)
    {
        return view('friends.show')
            ->with(['friend' => $this->friends[$id]]);
    }

}
