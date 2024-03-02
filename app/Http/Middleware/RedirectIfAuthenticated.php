<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider; // RouteServiceProviderクラスを使用するための宣言。リダイレクト先のURLを提供するクラス。
use Closure; // Laravelのクロージャを使用するための宣言。リクエストの前後で処理を行うために使用。
use Illuminate\Http\Request; // HTTPリクエストを扱うためのクラスを使用するための宣言。
use Illuminate\Support\Facades\Auth; // 認証処理を扱うためのファサードを使用するための宣言。
use Symfony\Component\HttpFoundation\Response; // HTTPレスポンスを扱うためのクラスを使用するための宣言。

class RedirectIfAuthenticated // RedirectIfAuthenticatedミドルウェアのクラス定義。
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
{
    $guards = empty($guards) ? [null] : $guards;

    foreach ($guards as $guard) {
        if (Auth::guard($guard)->check()) {
            // ユーザーがゲストである場合はリダイレクトしない
            if (Auth::user()->is_guest) {
                return $next($request);
            }
            // それ以外の認証済みユーザーの場合は、ホームまたはダッシュボードにリダイレクト
            return redirect(RouteServiceProvider::HOME);
        }
    }

    return $next($request);
}

}
