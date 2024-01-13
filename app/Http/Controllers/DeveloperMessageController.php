<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperMessageController extends Controller
{
    public function show()
    {
        return view('developer_message');
    }
}
