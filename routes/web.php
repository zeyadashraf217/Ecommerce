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

Route::get('/', function () {
    $category_id= Category::where('name', 'women')->first()->id;
    $products = Product::where('category_id',$category_id)->get()->take(8);
    $random_products = Product::inRandomOrder()->get()->take(8);
    return view('homepage',compact('products','random_products'));
});



Auth::routes(['verify' => true ,'resend'=> true]);

Route::get('auth/facebook', 'App\Http\Controllers\SocialController@facebookRedirect');
Route::get('auth/facebook/callback', 'App\Http\Controllers\SocialController@loginWithFacebook');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('user', UserController::class);

Route::get('/adddata', [App\Http\Controllers\ProductController::class, 'addData'])->name('add_data');
Route::get('/leoo', [App\Http\Controllers\ProductController::class, 'women_products'])->name('womenProducts');

