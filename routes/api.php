<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::prefix('v1')->get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::prefix('v1')->get('/logs', function (Request $request) {
    return "<pre>" . file_get_contents('/tmp/laravel.log');
});