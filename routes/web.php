<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//login controllers
use App\Http\Controllers\accountController;
Route::get('/signin', [accountController::class, 'signin'])->name('signin');
route::post('/signinProcess', [accountController::class, 'signin']);
Route::get('/signup', [accountController::class, 'signup'])->name('signup');
Route::post('/signupProcess', [accountController::class, 'signup']);


//auth routes
Route::get('auth/google', [accountController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [accountController::class, 'handleGoogleCallback']);
//end auth routes

//user controllers
Route::get('/myAccount', [accountController::class, 'userAccount'])->name('user');

//admin controllers
use App\Http\Controllers\adminController;
Route::get('/admin', [adminController::class, 'admin'])->name('admin');

// product controllers
use App\Http\Controllers\ProductController;
Route::get('/singleProduct', [ProductController::class, 'singleProduct'])->name('singleProduct');
Route::get('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');
Route::post('/addProductProcess', [ProductController::class, 'addProduct'])->name('addProductProcess');
Route::get('/productInventory', [ProductController::class, 'inventory'])->name('productInventory');


//search controllers
use App\Http\Controllers\searchController;
Route::get('/search', [searchController::class, 'search'])->name('search');

//cart controllers
use App\Http\Controllers\cartController;
Route::get('/cart', [cartController::class, 'cart'])->name('cart');

//order controllers
use App\Http\Controllers\orderController;
Route::get('/order', [orderController::class, 'order'])->name('order');

//payment controllers
use App\Http\Controllers\checkoutController;
Route::get('/checkout', [checkoutController::class, 'checkout'])->name('checkout');
//shipping controllers

//public controllers
use App\Http\Controllers\blogControll;
Route::get('/blog', [blogControll::class, 'blog'])->name('blog');
Route::get('/blogDetail', [blogControll::class, 'blogDetail'])->name('blogDetail');

//live chat controllers
use App\Http\Controllers\liveChatController;
Route::get('/liveChat', [liveChatController::class, 'liveChat'])->name('liveChat');
Route::get('/liveChatAdmin', [liveChatController::class, 'liveChatAdmin'])->name('liveChatAdmin');
Route::get('/liveChatSeller', [liveChatController::class, 'liveChatSeller'])->name('liveChatSeller');