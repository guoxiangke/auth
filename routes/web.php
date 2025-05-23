<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeixinController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', function () {
    return view('home');
})->name('wx.auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('guest')->group(function () {
    Route::get('/login/wechat', [WeixinController::class, 'weixin'])->name('login');
    Route::get('/login/wechat/callback', [WeixinController::class, 'weixinlogin']);
});

//微信社交认证登陆路由
$wechatVerifyCode = env('WEIXIN_VERIFY_CODE', 'Need config WEIXIN_VERIFY_CODE to Verify!');

Route::get('/MP_verify_'.$wechatVerifyCode.'.txt', function () use($wechatVerifyCode) {
    return $wechatVerifyCode;
});