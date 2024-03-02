<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * ログインビューの表示
     */

    public function create(): View
    {
        // ユーザーが既にログインしている場合は、ダッシュボードにリダイレクト
        // if (Auth::check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        return view('auth.login');
    }


    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // ログイン成功メッセージをセッションに追加
        session()->flash('login_success', 'ログインしました');

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // ログアウト成功メッセージをセッションに追加
        session()->flash('logout_success', 'ログアウトしました');

        return redirect('/');
    }
}
