<?php

use App\Http\Controllers\Sample\IndexController;
use App\Http\Controllers\Tweet\CreateController;
use App\Http\Controllers\Tweet\IndexController as TweetIndexController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sample', [IndexController::class, 'show']);

// Route::get('/sample/{id}', [IndexController::class, 'showId']);

Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class)
    ->name('tweet.index');

Route::post('/tweet/create', \App\Http\Controllers\Tweet\CreateController::class)
    ->name('tweet.create');