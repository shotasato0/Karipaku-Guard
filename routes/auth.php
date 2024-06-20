<?php

// Auth関連のコントローラーを使用するための名前空間を指定
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

// ゲストユーザーのみアクセス可能なルートをグループ化
Route::middleware('guest')->group(function () {
    // ユーザー登録ページを表示
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');
    // ユーザー登録処理を実行
    Route::post('register', [RegisteredUserController::class, 'store']);

    // ログインページを表示
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');
    // ログイン処理を実行
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    // パスワードリセットリンクのリクエストページを表示
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');
    // パスワードリセットリンクをメールで送信
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    // パスワードリセットページを表示
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');
    // 新しいパスワードでリセットを実行
    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

// 認証済みユーザーのみアクセス可能なルートをグループ化
Route::middleware('auth')->group(function () {
    // メールアドレス確認のプロンプトを表示
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    // メールアドレスの確認処理を実行
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1']) // 署名付きURLとレート制限を適用
                ->name('verification.verify');

    // メールアドレス確認通知を再送信
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1') // レート制限を適用
                ->name('verification.send');

    // パスワード確認ページを表示
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');
    // パスワード確認処理を実行
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    // パスワード更新処理を実行
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    // ログアウト処理を実行
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});