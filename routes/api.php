<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::prefix('v1')->get('/user', function (Request $request) {
    Log::error('v1-requestAll', $request->all());
    Log::error('v1-auth.user', [auth()->user()]);
    return $request->user();
})->middleware('auth:api');

Route::prefix('v2')->get('/user', function (Request $request) {
    Log::error('v2-requestAll', $request->all());
    Log::error('v2-auth.user', [auth()->user()]);
    return $request->user();
});
