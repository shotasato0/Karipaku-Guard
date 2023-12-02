<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;
use App\Models\Borrow;

class FriendController extends Controller
{
    public function index()
    {
        $friends = Friend::latest()->get();

        return view('index')
            ->with(['friends' => $friends]);
    }

    public function show(Borrow $borrow)
    {
        $friend = Friend::find($borrow); // IDに基づいて単一の友人を取得

        if (!$friend) {
            // 友人が見つからない場合の処理
            abort(404);
        }

        return view('friends.show')
            ->with(['friend' => $friend]);
    }

    public function edit(Borrow $borrow)
    {
        return view('friends.edit')
            ->with(['borrow' => $borrow]);
    }

    public function update(Request $request, Friend $friend)
{
    $validateData = $request->validate([
        'age' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'relationship_type' => 'required|string|max:255',
    ]);

    $friend->age = $request->age;
    $friend->gender = $request->gender;
    $friend->phone = $request->phone;
    $friend->email = $request->email;
    $friend->address = $request->address;
    $friend->relationship_type = $request->relationship_type;
    $friend->save();

    if ($friend->borrow) {
        $borrowId = $friend->borrow->id;
        return redirect()->route('friends.show', ['borrow' => $borrowId]);
    } else {
        // `borrow` リレーションシップがない場合のリダイレクト先を設定
        return redirect()->route('borrows.index');
    }
}

}