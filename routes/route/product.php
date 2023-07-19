<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/product', [ProductController::class, 'index']);
Route::post('/products/create',[ProductController::class,'save']);
Route::get('/category',[ProductController::class,'fillCategory']);
Route::get('/provider',[ProductController::class,'fillProvider']);