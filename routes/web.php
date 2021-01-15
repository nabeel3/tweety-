<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('profile/{user}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile');

Route::Post('/follow/{user:name}', [App\Http\Controllers\FollowController::class, 'store']);


Route::get('/tweets',[\App\Http\Controllers\TweetController::class, 'index'])->name('home');
Route::Post('/tweets',[\App\Http\Controllers\TweetController::class, 'store'])->name('tweets');








