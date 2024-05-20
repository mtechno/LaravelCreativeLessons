<?php

use App\Http\Controllers\{
    FishController,
    KolbasaController,
    KrossovkiController,
    LekarstvaController,
    MilkController,
    WaterController,
    MyPlaceController,
    FlakesController,
    PostController
};
// use Illuminate\Support\Facades\Route;


Route::get('/fish/{ff}', [FishController::class, 'index']);
Route::get('/my_page', [MyPlaceController::class,'index']);
Route::get('/kolbasa', [KolbasaController::class,'index']);
Route::get('/fish', [FishController::class, 'index']);
Route::get('/milk', [MilkController::class, 'index']);
Route::get('/flakes', [FlakesController::class, 'index']);
Route::get('/krossovki', [KrossovkiController::class, 'index']);
Route::get('/lekarstva', [LekarstvaController::class, 'index']);
Route::get('/water', [WaterController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);


