<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Log;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $socialiteUser = Socialite::driver('google')->user();
            $email = $socialiteUser->email;

            $user = User::firstOrCreate(['email' => $email], [
                'name' => $socialiteUser->name,
            ]);

            Auth::login($user);

            return redirect()->intended('dashboard');
        } catch (Exception $e) {
            Log::error($e);
            throw $e;
        }
    }

    public function handleGoogleSignupCallback()
{
    try {
        $socialiteUser = Socialite::driver('google')->user();
        $email = $socialiteUser->email;

        // 既存ユーザーのチェック
        $user = User::where('email', $email)->first();

        // ユーザーが存在しない場合のみ新規作成
        if (!$user) {
            $user = User::create([
                'name' => $socialiteUser->name,
                'email' => $email,
                // 他の必要な情報を追加
            ]);
        }

        Auth::login($user);

        return redirect()->intended('dashboard');
    } catch (Exception $e) {
        Log::error($e);
        throw $e;
    }
}
}

