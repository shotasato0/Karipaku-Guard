<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\DeveloperMessageController;//いらないかも？
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\GoogleLoginController;


    // HomeController
    //ログイン前に表示される画面
    Route::get('/', [HomeController::class, 'home'])->middleware('guest')
        ->name('home');

    //ManualController
    //アプリの使い方
    Route::get('/manual', [ManualController::class, 'index'])
        ->name('manual.index');

    // FriendController
    //貸し主情報の編集
    Route::get('/friends/{borrow}/edit/', [FriendController::class, 'edit'])
        ->name('friends.edit');
    //貸し主情報の更新
    Route::patch('/friends/update/{friend}', [FriendController::class, 'update'])
        ->name('friends.update')->where('friend', '[0-9]+');

    // BorrowController
    //メイン画面
    Route::get('/index', [BorrowController::class, 'index'])
        ->name('borrows.index');
    //貸し主情報
    Route::get('/borrows/{borrow}', [BorrowController::class, 'friend'])
        ->name('borrows.friend')->where('borrow', '[0-9]+');
    //新規追加
    Route::get('/borrows/create', [BorrowController::class, 'create'])
        ->name('borrows.create');
    //保存
    Route::post('/borrows/store', [BorrowController::class, 'store'])
        ->name('borrows.store');
    //登録情報の編集
    Route::get('/borrows/{borrow}/edit/', [BorrowController::class, 'edit'])
        ->name('borrows.edit');
    //登録情報の更新
    Route::patch('/borrows/update/{borrow}', [BorrowController::class, 'update'])
        ->name('borrows.update')->where('borrow', '[0-9]+');
    //登録情報の削除
    Route::delete('/borrows/{borrow}', [BorrowController::class, 'destroy'])
        ->name('borrows.destroy')->where('borrow', '[0-9]+');

    // InformationController
    //開発者からのメッセージ
    Route::get('/information/developerMessage', [InformationController::class, 'developerMessage'])
        ->name('information.developerMessage');
    //プライバシーポリシー
    Route::get('information/privacy-policy', [InformationController::class, 'privacyPolicy'])
        ->name('information.privacy-policy');
    //利用規約
    Route::get('information/terms', [InformationController::class, 'terms'])
        ->name('information.terms');

    //SearchController
    //検索機能
    Route::get('/search', 'App\Http\Controllers\SearchController@index')
        ->name('search.index');

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('verified');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

require __DIR__.'/auth.php';
