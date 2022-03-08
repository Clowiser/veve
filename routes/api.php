<?php

use App\Http\Api\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', [ProductsController::class, 'index']);
Route::get('product/{id}', [ProductsController::class, 'show']);
Route::put('product/{id}', [ProductsController::class, 'update']);
Route::delete('product/delete/{id}', [ProductsController::class, 'delete']);
Route::post('product', [ProductsController::class, 'add']);
