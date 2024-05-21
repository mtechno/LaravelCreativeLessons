<?php

use App\Http\Controllers\{AboutController,
    ContactsController,
    FishController,
    KolbasaController,
    KrossovkiController,
    LekarstvaController,
    MainController,
    MilkController,
    WaterController,
    MyPlaceController,
    FlakesController,
    PostController};
// use Illuminate\Support\Facades\Route;


//Route::get('/fish/{ff}', [FishController::class, 'index']);
Route::get('/my_page', [MyPlaceController::class,'index']);
Route::get('/my_page/create', [MyPlaceController::class,'create']);
Route::get('/kolbasa', [KolbasaController::class,'index']);
Route::get('/kolbasa/create', [KolbasaController::class,'create']);
Route::get('/create', [KolbasaController::class,'create']);
Route::get('/fish', [FishController::class, 'index']);
Route::get('/fish/create', [FishController::class, 'create']);
Route::get('/milk', [MilkController::class, 'index']);
Route::get('/milk/create', [MilkController::class, 'create']);
Route::get('/flakes', [FlakesController::class, 'index']);
Route::get('/flakes/create', [FlakesController::class, 'create']);
Route::get('/krossovki', [KrossovkiController::class, 'index']);
Route::get('/krossovki/create', [KrossovkiController::class, 'create']);
Route::get('/lekarstva', [LekarstvaController::class, 'index']);
Route::get('/lekarstva/create', [LekarstvaController::class, 'create']);
Route::get('/water', [WaterController::class, 'index']);
Route::get('/water/create', [WaterController::class, 'create']);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);
Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);

Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::get('/main', [MainController::class, 'index'])->name('main.index');


