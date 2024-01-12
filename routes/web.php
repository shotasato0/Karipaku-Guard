<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\DeveloperMessageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// DeveloperMessageController
Route::get('/developer-message', [DeveloperMessageController::class, 'show'])
    ->name('developer.message');

//FriendController
// Route::get('/friends', [FriendController::class, 'index'])
//     ->name('friends.index');
Route::get('/friends/{borrow}', [FriendController::class, 'show'])
    ->name('friends.show')
    ->where('borrow', '[0-9]+');
Route::get('/friends/{borrow}/edit/', [FriendController::class, 'edit'])
    ->name('friends.edit');
Route::patch('/friends/update/{friend}', [FriendController::class, 'update'])
    ->name('friends.update')
    ->where('friend', '[0-9]+');


//BorrowController
Route::get('/', [BorrowController::class, 'index'])
    ->name('borrows.index');
Route::get('/borrows/{borrow}', [BorrowController::class, 'friend'])
    ->name('borrows.friend')
    ->where('borrow', '[0-9]+');

Route::get('/borrows/item', [BorrowController::class, 'item'])
    ->name('borrows.item');

Route::post('/borrows/store', [BorrowController::class, 'store'])
    ->name('borrows.store');
Route::get('/borrows/create', [BorrowController::class, 'create'])
    ->name('borrows.create');

Route::get('/borrows/{borrow}/edit/', [BorrowController::class, 'edit'])
    ->name('borrows.edit');
Route::patch('/borrows/update/{borrow}', [BorrowController::class, 'update'])
    ->name('borrows.update')
    ->where('id', '[0-9]+');

Route::delete('/borrows/{borrow}', [BorrowController::class, 'destroy'])
    ->name('borrows.destroy')
    ->where('borrow', '[0-9]+');

//SearchController
Route::get('/search', 'App\Http\Controllers\SearchController@index')
    ->name('search.index');

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 証関連のルート定義を含む重要な部分。消さないように！
require __DIR__.'/auth.php';