<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBorrowRequest; // StoreBorrowRequestクラスをインポート。これはカスタムリクエストバリデーションクラスです。
use Illuminate\Support\Facades\Auth; // Authファサードをインポート。認証処理に使用されます。
use Illuminate\Http\Request; // Illuminate\Http\Requestクラスをインポート。HTTPリクエストを処理するために使用されます。
use App\Models\Borrow; // App\Models名前空間からBorrowモデルをインポート。
use App\Models\Friend; // App\Models名前空間からFriendモデルをインポート。

class BorrowController extends Controller // BorrowControllerクラスを定義。基本のControllerクラスを継承。
{
    public function __construct()
    {
        $this->middleware('auth'); // コンストラクタで、'auth'ミドルウェアを適用。これにより、認証されたユーザーのみがアクセス可能になる。
    }


    public function index() // indexメソッド。借り物の一覧を表示するためのメソッド。
    {
        if(auth()->check()) {
            $borrows = auth()->user()->borrows()->latest()->get(); // 認証されたユーザーに関連する借り物を最新順で取得。
        } else {
            $borrows = session()->get('borrows', []); //認証されてなければ（ゲストユーザーであれば）セッションからデータを取得（セッションがなければ空配列を使用）
        }

        return view('index') // 'index'ビューを返し、データを渡す。
            ->with(['borrows' => $borrows]); // ビューに$borrows変数を渡す。
    }


    public function friend(Borrow $borrow) // friendメソッド。特定の借り物に関連する友人の情報を表示するメソッド。
    {

        if(!$borrow->friend) { // Borrowモデルに関連するFriendが存在しない場合
             // 404エラーを発生させる。
            abort(404);
        }

        $title = $borrow->friend->name . 'の情報 - '; // ビューに表示するタイトルを設定。

        return view('friends.show', [ // 'friends.show'ビューを返す。
            'borrow' => $borrow, // ビューに$borrow変数を渡す。
            'title' => $title // タイトルもビューに渡す。
        ]);
    }

    public function create() // createメソッド。新しい借り物を作成するためのフォームを表示するメソッド。
    {
        return view('borrows.create'); // 'borrows.create'ビューを返す。
    }

    public function store(StoreBorrowRequest $request) // storeメソッド。新しい借り物を保存するメソッド。
    {
        if(Auth::check()) {
            // バリデーションが成功した場合の処理。StoreBorrowRequestに定義されたバリデーションルールに基づいている。
    
            $friend = new Friend(); // 新しいFriendモデルのインスタンスを作成。
            $friend->name = $request->friend_name; // リクエストから友人の名前を取得して設定。
            $friend->save(); // データベースに保存。
        
            // 新しいBorrowモデルのインスタンスを作成。
            $borrow = new Borrow();
            $borrow->user_id = auth()->id(); // 現在のユーザーIDを設定。
            $borrow->friend_id = $friend->id; // 新しく作成したFriendのIDを設定。
            $borrow->item_name = $request->item_name; // リクエストから借り物の名前を取得して設定。
            $borrow->borrowed_at = $request->borrowed_at; // 借りた日付を設定。
            $borrow->deadline = $request->deadline; // 返却期限を設定。
            $borrow->save(); // データベースに保存。
        } else {
            // 1. セッションから既存の借り物リストを取得（または新しいリストを開始）
            $borrows = session()->get('borrows', []);
    
            if (count($borrows) >= 3) {
                array_shift($borrows);
            } 

            // 2. 新しい借り物データをリストに追加
            $borrows[] = [
                // 'user_id' => auth()->id(), 上記で条件分岐したため、また一時的なidを使う設計に変更するため必要なくなった
                // 'friend_id' => $friend->id,
                'friend_name' => $request->friend_name,
                'item_name' => $request->item_name,
                'borrowed_at' => $request->borrowed_at,
                'deadline' => $request->deadline,
            ];

            // 3. 更新されたリストをセッションに保存
            session()->put('borrows', $borrows);
        }

        return redirect() // 保存後、borrows.indexルートにリダイレクト。
            ->route('borrows.index');
    }  


    public function edit(Borrow $borrow) // editメソッド。指定されたBorrowモデルを編集するためのフォームを表示するメソッド。
    {
        return view('borrows.edit') // 'borrows.edit'ビューを返す。
            ->with(['borrow' => $borrow]); // ビューに$borrow変数を渡す。
    }

    public function update(StoreBorrowRequest $request, Borrow $borrow) // updateメソッド。指定されたBorrowモデルを更新するメソッド。
    {
        // friendモデルを明示的に取得。
        $friend = $borrow->friend;

        // 取得したモデルに対して変更を加える。
        if ($friend) {
            $friend->name = $request->friend_name; // リクエストから友人の名前を更新。
            $friend->save(); // データベースに保存。
        }

        $borrow->friend_id = $request->friend_id; // FriendのIDを更新。
        $borrow->item_name = $request->item_name; // 借り物の名前を更新。
        $borrow->borrowed_at = $request->borrowed_at; // 借りた日付を更新。
        $borrow->deadline = $request->deadline; // 返却期限を更新。
        $borrow->save(); // データベースに保存。

        return redirect() // 更新後、borrows.indexルートにリダイレクト。
            ->route('borrows.index', $borrow);
    }

    public function destroy(Borrow $borrow) // destroyメソッド。指定されたBorrowモデルを削除するメソッド。
    {
        // 削除する前に関連するFriendモデルを取得。
        $friend = $borrow->friend;

        // Friendモデルが存在する場合は削除。
        if ($friend) {
            $friend->delete();
        }

        // Borrowモデルを削除。
        $borrow->delete();

        return redirect() // 削除後、borrows.indexルートにリダイレクト。
            ->route('borrows.index');
    }
}
