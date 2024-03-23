<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\listingController;
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


//listing cntroller

//all listings
Route::get('/',
[listingController::class, 'index']);

//-CRUD-\\
//create form
Route::get('/listings/create',
[listingController::class, 'create'])->middleware('auth');//////


//save/store listing form
Route::post('/listings',
[listingController::class, 'store'])->middleware('auth');//////


//edit listing 'get'
Route::get('/listings/{listing}/edit',
[listingController::class, 'edit'])->middleware('auth');//////


//update listing 'put'
Route::put('/listings/{listing}',
[listingController::class, 'update'])->middleware('auth');//////

//delete listing 'put'
Route::delete('/listings/{listing}',
[listingController::class, 'destroy'])->middleware('auth');//////

// manage listings
Route::get('/listings/manager',
[listingController::class, 'manager'])->middleware('auth');;

// single listing
Route::get('/listings/{listing}',
[listingController::class, 'show']);

//user controller

//register form
Route::get('/register',
[UserController::class, 'register'])->middleware('guest');

//store the new regitsered user
Route::post('/users',
[UserController::class, 'storeUser']);


//logout usser
Route::post('/logout',
[UserController::class, 'logout'])->middleware('auth');


//login  form
Route::get('/login',
[UserController::class, 'login'])->name('login')->middleware('guest');;

//log in the user /as in restoring
Route::post('/users/authi',
[UserController::class, 'authi']);
