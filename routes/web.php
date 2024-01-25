<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\DeveloperMessageController;
use App\Http\Controllers\HomeController;

    // HomeController
    Route::get('/', [HomeController::class, 'home'])->middleware('guest')->name('home');

    // DeveloperMessageController
    Route::get('/developer-message', [DeveloperMessageController::class, 'show'])->name('developer.message');

    // FriendController
    Route::get('/friends/{borrow}', [FriendController::class, 'show'])->name('friends.show')->where('borrow', '[0-9]+');
    Route::get('/friends/{borrow}/edit/', [FriendController::class, 'edit'])->name('friends.edit');
    Route::patch('/friends/update/{friend}', [FriendController::class, 'update'])->name('friends.update')->where('friend', '[0-9]+');

    // BorrowController
    Route::get('/index', [BorrowController::class, 'index'])->name('borrows.index');
    Route::get('/borrows/{borrow}', [BorrowController::class, 'friend'])->name('borrows.friend')->where('borrow', '[0-9]+');
    Route::post('/borrows/store', [BorrowController::class, 'store'])->name('borrows.store');
    Route::get('/borrows/create', [BorrowController::class, 'create'])->name('borrows.create');
    Route::get('/borrows/{borrow}/edit/', [BorrowController::class, 'edit'])->name('borrows.edit');
    Route::patch('/borrows/update/{borrow}', [BorrowController::class, 'update'])->name('borrows.update')->where('borrow', '[0-9]+');
    Route::delete('/borrows/{borrow}', [BorrowController::class, 'destroy'])->name('borrows.destroy')->where('borrow', '[0-9]+');

    // SearchController
    Route::get('/search', 'App\Http\Controllers\SearchController@index')->name('search.index');

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('verified');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

require __DIR__.'/auth.php';
