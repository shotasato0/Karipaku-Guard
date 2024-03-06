<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


class LoginController extends Controller
{
    // ゲストユーザー用の一時セッションを作成するメソッド
    public function guest(Request $request): RedirectResponse
    {
        // セッションにゲストユーザー用の一時的なデータを設定
        session(['is_guest' => true]);

        // 必要なら他のゲストユーザー用のデータをセッションに追加
        // 例: session(['guest_cart' => []]); など

        // ゲストユーザーをアプリケーションの特定のセクションにリダイレクト
        return redirect()->intended(RouteServiceProvider::HOME);
    }

}
