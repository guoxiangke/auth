<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
