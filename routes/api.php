<?php

use App\Http\Api\AuthController;
use App\Http\Api\ProductsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::middleware('auth:sanctum','verified')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('me', [AuthController::class, 'me'])->middleware('auth:sanctum');



Route::get('products', [ProductsController::class, 'index']);
Route::get('product/{id}', [ProductsController::class, 'show']);
Route::put('product/{id}', [ProductsController::class, 'update'])->middleware('auth:sanctum');
Route::delete('product/delete/{id}', [ProductsController::class, 'delete'])->middleware('auth:sanctum');
Route::post('product', [ProductsController::class, 'add'])->middleware('auth:sanctum');
