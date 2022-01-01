<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/wishlist', [WishlistController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);

