<?php

use App\Http\Controllers\{AboutController,
    ContactsController,
    FishController,
    FlakesController,
    HomeController,
    KolbasaController,
    KrossovkiController,
    LekarstvaController,
    MainController,
    MilkController,
    MyPlaceController,
    Post\CreateController,
    Post\DestroyController,
    Post\EditController,
    Admin\Post\IndexController,
    Post\ShowController,
    Post\StoreController,
    Post\UpdateController,
    PostController,
    WaterController};

// use Illuminate\Support\Facades\Route;

// тут мидлвары веба, сам поищи



//Route::get('/fish/{ff}', [FishController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');
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

Route::group(['namespace' => 'admin', 'prefix' => 'admin','middleware' => 'admin'], function () {
    Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
});
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', 'IndexController')->name('admin.post.index');
    });
});

//Route::get('/posts', [PostController::class])->name('posts.index');
Route::group(['namespace'=>'App\Http\Controllers\Post'], function (){
    Route::get('/posts', 'IndexController')->name('posts.index');
    Route::get('/posts/create', 'CreateController')->name('posts.create');
    Route::post('/posts/create', 'StoreController')->name('posts.store')
        //->withoutMiddleware(['web'])
        // ->middleware(['api'])
    ;


    Route::get('/posts/{post}', 'ShowController')->name('posts.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('posts.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('posts.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('posts.delete');

//    Route::get('/posts/update', [PostController::class, 'update']);
//    Route::get('/posts/delete', [PostController::class, 'delete']);
//    Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);
//    Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);
});

// в 11 версии по другому




Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
Route::get('/main', [MainController::class, 'index'])->name('main.index');




Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
