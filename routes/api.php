<?php

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('webhook/auth', function (Request $request) {
    User::firstOrCreate([
        'email'    => $request->input('data.user_email'),
    ],
    [
        'name'     => collect($request->only('user_meta.first_name', 'user_meta.last_name'))->flatten()->join(' '),
        'email'    => $request->input('data.user_email'),
        'password' => Hash::make(str()->random(10))
    ]);
});
