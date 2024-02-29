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
    public function handle(Request $request, Closure $next, string ...$guards): Response // ミドルウェアの主要な処理を行うメソッド。
    {
        $guards = empty($guards) ? [null] : $guards; // 引数で受け取った$guardsが空の場合、デフォルトのガード（null）を使用するように設定。

        foreach ($guards as $guard) { // 引数で指定された認証ガード（またはデフォルトのガード）を順にチェックするループ。
            if (Auth::guard($guard)->check()) { // 指定されたガードでユーザーが既に認証されているかを確認。
                return redirect(RouteServiceProvider::HOME); // 認証されている場合、RouteServiceProviderに定義されたHOME定数（通常はダッシュボードやホームページのURL）にリダイレクト。
            }
        }

        return $next($request); // ユーザーが認証されていない場合、次のミドルウェア（または最終的なリクエストハンドラ）にリクエストを渡す。
    }
}
