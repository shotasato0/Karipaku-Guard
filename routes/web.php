<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\BorrowController;
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
Route::get('/friends', [FriendController::class, 'index'])
    ->name('friends.index');
Route::get('/friends/{id}', [FriendController::class, 'show'])
    ->name('friends.show');

Route::get('/', [BorrowController::class, 'index'])
    ->name('borrows.index');
Route::get('/borrows/{id}', [BorrowController::class, 'friend'])
    ->name('borrows.friend');

Route::get('/borrows/item', [BorrowController::class, 'item'])
    ->name('borrows.item');
Route::get('/borrows/name', [BorrowController::class, 'name'])
    ->name('borrows.name');
        
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
