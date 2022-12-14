<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use App\Models\Category;

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

Route::get('/men', [App\Http\Controllers\ProductController::class, 'men_products'])->name('men');
Route::get('/kids', [App\Http\Controllers\ProductController::class, 'kids_products'])->name('kids');
Route::get('/all', [App\Http\Controllers\ProductController::class, 'all_products'])->name('all');
Route::get('/home', [App\Http\Controllers\ProductController::class, 'women_products'])->name('women');
Route::get('/', [App\Http\Controllers\ProductController::class, 'women_products'])->name('women');


Auth::routes(['verify' => true ,'resend'=> true]);

Route::get('auth/facebook', 'App\Http\Controllers\SocialController@facebookRedirect');
Route::get('auth/facebook/callback', 'App\Http\Controllers\SocialController@loginWithFacebook');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('user', UserController::class);

Route::get('/search', [ProductController::class, 'search'])->name('product.search');
Route::post('/alert', [App\Http\Controllers\MycartController::class, 'add_item'])->name('add_item')->middleware('auth');
Route::get('/mycart', [App\Http\Controllers\MycartController::class, 'mycart'])->name('mycart')->middleware('auth');
Route::delete('mycart/{id}', [App\Http\Controllers\MycartController::class, 'destroy'])->name('mycart.destroy');
Route::post('/Checkout', [App\Http\Controllers\MycartController::class, 'checkout'])->name('checkout')->middleware('auth');


