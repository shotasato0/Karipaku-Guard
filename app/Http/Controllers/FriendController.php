<?php

namespace App\Http\Controllers; // 名前空間の定義。このコントローラはApp\Http\Controllers名前空間に属します。

use Illuminate\Http\Request; // Illuminate\Http\Requestクラスをインポート。HTTPリクエストを処理するために使用されます。
use App\Models\Friend; // App\Models名前空間からFriendモデルをインポート。
use App\Models\Borrow; // App\Models名前空間からBorrowモデルをインポート。

class FriendController extends Controller // FriendControllerクラスを定義。基本のControllerクラスを継承。
{
    public function index() // indexメソッド。フレンドの一覧を表示するためのメソッド。
    {
        $friends = Friend::latest()->get(); // Friendモデルを使って、最新のフレンドデータを取得。

        return view('index') // 'index'ビューを返し、データを渡す。
            ->with(['friends' => $friends]); // ビューに$friends変数を渡す。
    }

    public function edit(Borrow $borrow) // editメソッド。指定されたBorrowモデルを編集するためのメソッド。
    {
        if(!$borrow->friend) {
            abort(404);
        }

        $title = $borrow->friend->name . 'の情報の編集 - '; // ビューに表示するタイトルを設定。

        return view('friends.edit', [
            'borrow' => $borrow,
            'title' => $title
        ]); // 'friends.edit'ビューを返す。
    }

    public function update(Request $request, Friend $friend)
{
    // リクエストデータの受け取り、未入力の場合はnullを設定
    $friend->age = $request->has('age') ? $request->age : null;
    $friend->gender = $request->has('gender') ? $request->gender : null;
    $friend->phone = $request->has('phone') ? $request->phone : null;
    $friend->email = $request->has('email') ? $request->email : null;
    $friend->address = $request->has('address') ? $request->address : null;
    $friend->relationship_type = $request->has('relationship_type') ? $request->relationship_type : null;

    $friend->save(); // 更新内容をデータベースに保存

    // リダイレクト処理
    if ($friend->borrows->isNotEmpty()) {
        $borrow = $friend->borrows->first();
        return redirect()->route('borrows.friend', ['borrow' => $borrow->id]);
    } else {
        return redirect()->route('borrows.index');
    }
}



}
