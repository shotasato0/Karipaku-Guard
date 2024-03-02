<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


class LoginController extends Controller
{
    public function guest() {
        // Userテーブルからゲストユーザーのデータを取得。条件にはメアド。
        $user = User::firstOrCreate(
            ['email' => 'guest@example.com'], // 検索条件
            ['is_guest' => true], // 作成する場合のデフォルト値
        );

        Auth::login($user);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
