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

Route::view('/', 'pages.notes')->middleware('auth');

Route::view('auth/login', 'auth.login')->middleware('guest')->name('login');
Route::view('me/notes', 'pages.notes')->middleware('auth')->name('me');

Route::post('auth/logout', function () {
    session()->flush();
    auth()->logout();
    return redirect()->route('login');
})->name('logout');
