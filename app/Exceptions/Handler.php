<?php

namespace App\Exceptions;
// このファイルがApp\Exceptions名前空間に属していることを宣言

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
// Laravelの基本的な例外ハンドラクラスをExceptionHandlerとしてインポート

use Throwable;
// 例外やエラーをキャッチするためのインターフェースをインポート

class Handler extends ExceptionHandler
// Handlerクラスを定義し、LaravelのExceptionHandlerクラスを継承
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];
    // バリデーション例外時にセッションにフラッシュしない入力フィールドのリスト

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    // アプリケーションの例外処理コールバックを登録するメソッド
}