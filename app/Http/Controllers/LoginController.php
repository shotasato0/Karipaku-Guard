<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


class LoginController extends Controller
{
    public function guest() {
        $user = User::where('email', 'guest@example.com')->first();

        if ($user === null) {
            //ユーザーが見つからなかった場合の処理
            return redirect()->route('login')->withErrors('ユーザーが見つかりません。');
        }

        Auth::login($user);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
