<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product', [ProductController::class, 'fillProduct']);
Route::get('/product/show/{id}', [ProductController::class, 'showProduct']);
Route::put('/product/update/{id}', [ProductController::class, 'updateProduct']);
Route::post('/products/create',[ProductController::class,'save']);
Route::get('/category',[ProductController::class,'fillCategory']);
Route::get('/provider',[ProductController::class,'fillProvider']);
Route::get('/type',[ProductController::class,'fillType']);
Route::get('/status',[ProductController::class,'fillStatus']);


