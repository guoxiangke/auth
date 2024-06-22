<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeixinController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/login/wechat', [WeixinController::class, 'weixin'])->name('login');
Route::get('/login/wechat/callback', [WeixinController::class, 'weixinlogin']);

Route::get('/api/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');