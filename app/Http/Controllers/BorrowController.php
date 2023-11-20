<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;

class BorrowController extends Controller
{
    public function index() {
        $borrows = Borrow::latest()->get();

        return view('index')
            ->with(['borrows' => $borrows]);
    }

    public function friend($id) {
        $borrow = Borrow::find($id); 
        // $borrows = Borrow::latest()->get();

        return view('friends.show')
            ->with(['borrow' => $borrow]);
    }
}
