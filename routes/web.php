<?php

use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'showHome']);
Route::get('home', [HomeController::class, 'showHome']);
Route::get('product', [ProductController::class, 'showListe']);
Route::get('product/{id}',[ProductController::class, 'showProduit']);
Route::get('cart', [CartController::class, 'showCart']);

Route::get('backoffice', [BackOfficeController::class, 'index']);
Route::post('backoffice/add', [BackOfficeController::class, 'add']);
Route::put('backoffice/edit/{id}', [BackOfficeController::class, 'edit']);
Route::delete('backoffice/delete/{id}', [BackOfficeController::class, 'delete']);

