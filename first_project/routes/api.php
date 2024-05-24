<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// тут автоматом цепляются мидлвары апи

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
