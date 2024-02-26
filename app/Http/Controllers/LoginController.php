<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;  // Authファサードをインポート
use App\Providers\RouteServiceProvider; // RouteServiceProviderをインポート


class LoginController extends Controller
{
    public function guest() {
        $guestUserId = 2;
        $user = User::find($guestUserId);

        if ($user === null) {
            //ユーザーが見つからなかった場合の処理
            return redirect()->route('login')->withErrors('ユーザーが見つかりません。');
        }

        Auth::login($user);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
