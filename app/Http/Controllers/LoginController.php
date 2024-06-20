<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


class LoginController extends Controller
{
    // ゲストユーザー用の一時セッションを作成するメソッド
    public function guest(Request $request )
    {
        // セッションにゲストユーザー用の一時的なデータを設定
        session(['is_guest' => true]);

        // 必要なら他のゲストユーザー用のデータをセッションに追加
        // 例: session(['guest_cart' => []]); など

        // ゲストユーザーをアプリケーションの特定のセクションにリダイレクト
        if(auth()->check()) {
            $borrows = auth()->user()->borrows()->latest()->get(); // 認証されたユーザーに関連する借り物を最新順で取得。
        } else {
            $borrows = session()->get('borrows', []); //認証されてなければ（ゲストユーザーであれば）セッションからデータを取得（セッションがなければ空配列を使用）
        }

        return view('index') // 'index'ビューを返し、データを渡す。
            ->with(['borrows' => $borrows]); // ビューに$borrows変数を渡す。
    }

}
