<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Friend;

class BorrowController extends Controller
{
    public function index() {
        $borrows = Borrow::latest()->get();

        return view('index')
            ->with(['borrows' => $borrows]);
    }

    public function friend(Borrow $borrow) {
        return view('friends.show')
            ->with(['borrow' => $borrow]);
    }

    public function create() {
        return view('borrows.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'friend_name' => 'required|string|max:255',
            'item_name' => 'required|string|max:255',
            'borrowed_at' => 'required|date',
        ]);
    
        // バリデーションが成功した場合の処理
        // 友達モデルを作成
        $friend = new Friend();
        $friend->name = $request->friend_name;
        // ...他の必要なフィールドを設定
        $friend->save();
    
        // 借り物モデルを作成
        $borrow = new Borrow();
        $borrow->friend_id = $friend->id; // 新しく作成したFriendのIDを設定
        $borrow->item_name = $request->item_name;
        $borrow->borrowed_at = $request->borrowed_at;
        $borrow->save();
    
        return redirect()
            ->route('borrows.index');
    }
    

    public function edit(Borrow $borrow) {
        return view('borrows.edit')
            ->with(['borrow' => $borrow]);
    }

    public function update(Request $request, Borrow $borrow) {
        $validatedData = $request->validate([
            'friend_name' => 'required|string|max:255',
            'friend_id' => 'required|integer|exists:friends,id',
            'item_name' => 'required|string|max:255',
            'borrowed_at' => 'required|date',
        ]);

        // friendモデルを明示的に取得
        $friend = $borrow->friend;

        // 取得したモデルに対して変更を加える
        if ($friend) {
            $friend->name = $request->friend_name;
            $friend->save();
        }

        $borrow->friend_id = $request->friend_id;
        $borrow->item_name = $request->item_name;
        $borrow->borrowed_at = $request->borrowed_at;
        $borrow->save();

        return redirect()
            ->route('borrows.index', $borrow);
    }

    public function destroy(Borrow $borrow) {
        // 削除する前に関連する友達モデルを取得
        $friend = $borrow->friend;

        // 友達モデルが存在する場合は削除
        if ($friend) {
            $friend->delete();
        }

        // 借り物モデルを削除
        $borrow->delete();

        return redirect()
            ->route('borrows.index');
    }
}

