<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\WishController;


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
Route::get('/catalog/{card}', [ProductController::class, 'show'])->name('product');

Route::get('/wishlist', [WishController::class, 'love'])->name('love');
Route::get('/cart-shopping', [ProductController::class, 'object'])->name('cart');
Route::get('/cart/{id}', [ProductController::class, 'addtocart'])->name('objectcart');

Route::get('/catalog', [ProductController::class, 'catalog'])->name('catalog');

Route::get('/aboutus', [AboutUsController::class, 'inform'])->name('aboutUs');
Route::post('/clear-cart', [ProductController::class, 'clearCart'])->name('clearCart');
Route::get('/remove-from-cart/{id}', [ProductController::class, 'removeFromCart'])->name('remove-from-cart');
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

