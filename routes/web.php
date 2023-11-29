<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
/*
data show-ProductController*
*/
Route::get('/',[ProductController::class,'showUsers'])->name('home');

/*data add-ProductController**--------------------------------------------------------------------------------------*/
Route::get('/user/{id}',[ProductController::class,'singleUsers'])->name('view.user');  
Route::post('/add',[ProductController::class,'addproudct'])->name('addproudct');
/*data add-ProductController**--------------------------------------------------------------------------------------*/

/*delete-ProductController*--------------------------------------------------------------------------------------*/
Route::get('/delete/{id}',[ProductController::class,'deleteUsers'])->name('delete.user');
/*delete-ProductController**--------------------------------------------------------------------------------------*/

/*update-ProductController*--------------------------------------------------------------------------------------*/
Route::post('/update/{id}',[ProductController::class,'updateUsers'])->name('update.user');
Route::get('/updatepage/{id}',[ProductController::class,'updatePage'])->name('update.page'); 
/*update---ProductController*--------------------------------------------------------------------------------------*/




/*register---AuthController*--------------------------------------------------------------------------------------*/
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'store']);
/*register---AuthController----------------------------------------------------------------------------------------*/




/*login---loginController----------------------------------------------------------------------------------------*/
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
/*log---loginController----------------------------------------------------------------------------------------*/




Route::view('newproduct','/addproudct');
Route::view('signup','/register');
Route::view('log','/login');
