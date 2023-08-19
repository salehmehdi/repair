<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Search\Listing;
use App\Http\Controllers\Product\Show;
use App\Http\Controllers\Product\Listing as ProductListing;
use App\Http\Controllers\Hompage\Show as HompageShow;
use App\Http\Controllers\Cart\Store;

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

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/search/listing', [Listing::class, '__invoke']);
Route::get('/product/show/{id}', [Show::class, '__invoke']);
Route::get('/product/listing', [ProductListing::class, '__invoke']);
Route::get('/homepage/show', [HompageShow::class, '__invoke']);
Route::get('/cart/store/{productId}', [Store::class, '__invoke']);

