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

    public function update(Request $request, Friend $friend) // updateメソッド。指定されたFriendモデルを更新するためのメソッド。
    {
        $validateData = $request->validate([ // 入力データのバリデーション。
            'age' => 'required|string|max:255', // 年齢は必須で、文字列、最大255文字。
            'gender' => 'required|string|max:255', // 性別も必須で、文字列、最大255文字。
            'phone' => 'required|string|max:255', // 電話番号も必須で、文字列、最大255文字。
            'email' => 'required|string|max:255', // メールアドレスも必須で、文字列、最大255文字。
            'address' => 'required|string|max:255', // 住所も必須で、文字列、最大255文字。
            'relationship_type' => 'required|string|max:255', // 関係の種類も必須で、文字列、最大255文字。
        ]);

        // 受け取ったリクエストのデータでFriendモデルのプロパティを更新。
        $friend->age = $request->age;
        $friend->gender = $request->gender;
        $friend->phone = $request->phone;
        $friend->email = $request->email;
        $friend->address = $request->address;
        $friend->relationship_type = $request->relationship_type;
        $friend->save(); // データベースに保存。

        if ($friend->borrows->isNotEmpty()) { // もしFriendが借用情報を持っていれば
            $borrow = $friend->borrows->first(); // 最初の借用情報を取得。
            return redirect()->route('borrows.friend', ['borrow' => $borrow->id]); // friends.showルートにリダイレクトし、借用情報のIDを渡す。
        } else {
            return redirect()->route('borrows.index'); // 借用情報がなければborrows.indexにリダイレクト。
        }
        
    }

}
