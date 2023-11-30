<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//! laravelトップページ
Route::get('/', function () {
    return view('welcome');
});

//! Laravel Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//! サンプルコード
// Route::get('/sample', [IndexController::class, 'show']);

// Route::get('/sample/{id}', [IndexController::class, 'showId']);

//! 一覧表示
Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class)
    ->name('tweet.index');

//! 投稿処理
Route::post('/tweet/create', \App\Http\Controllers\Tweet\CreateController::class)
    ->name('tweet.create');

//! 更新処理
Route::get('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\Update\IndexController::class)
    ->name('tweet.update.index')
    ->where('tweetId', '[0-9]+');
Route::put('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\Update\PutController::class)
    ->name('tweet.update.put')
    ->where('tweetId', '[0-9]+');

//! 削除処理
Route::delete('/tweet/delete/{tweetId}', \App\Http\Controllers\Tweet\DeleteController::class)
    ->name('tweet.delete');

require __DIR__.'/auth.php';
