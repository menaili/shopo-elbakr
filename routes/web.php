<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/','Articles');

Route::get('allproduct', function () {
    return view('allProducts');
});

Route::get('search', ['App\Http\Controllers\Search'::class,'search'])->name("ss");

Route::resource('Articles', 'App\Http\Controllers\ArticleController'::class);

Route::resource('Categories', 'App\Http\Controllers\CategorieController'::class);

Route::resource('Product', 'App\Http\Controllers\ProductDetController'::class);



//Route::get('Producr-details', 'App\Http\Controllers\ProDetailsController'::class);


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/Article', function () {
         return view('Articles');
    })->name('dashboard');

    Route::resource('Articles', 'App\Http\Controllers\ArticleController'::class)->only(['create','store','destroy','edit']);
    Route::resource('announcement', 'App\Http\Controllers\AnnonceController'::class);
    Route::resource('Favorites', 'App\Http\Controllers\FavoriteController'::class);

    Route::get('wishliste/{id}', ['App\Http\Controllers\Search'::class,'wishliste'])->name("wishliste");

    Route::get('Users', ['App\Http\Controllers\Users'::class,'index']);

    // Route::get('deleteUsers/{id}', ['App\Http\Controllers\Users'::class,'deleteU']);
    Route::post('deleteUsers/me', ['App\Http\Controllers\Users'::class,'deleteU']);

    Route::get('logoutt', ['App\Http\Controllers\Users'::class,'log'])->name('logoutt');

    Route::get('MyProducts', ['App\Http\Controllers\Users'::class,'myproducts']);

    Route::get('ALLproducts', ['App\Http\Controllers\Users'::class,'prds']);




});
