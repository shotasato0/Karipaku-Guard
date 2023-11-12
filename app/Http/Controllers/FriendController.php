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
    $friend = Friend::find($id); // IDに基づいて単一の友人を取得

    if (!$friend) {
        // 友人が見つからない場合の処理
        abort(404);
    }

    return view('friends.show')
        ->with(['friend' => $friend]);
}


}
