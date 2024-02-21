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

//admin controllers

// product controllers

//cart controllers

//order controllers

//payment controllers

//shipping controllers

//live chat controllers

//contact controllers