<?php

use App\Http\Api\ProductsController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {

    Route::get('backoffice', [BackOfficeController::class, 'index']);

    Route::get('backoffice/add', [BackOfficeController::class, 'create']);
    Route::post('backoffice', [BackOfficeController::class, 'add']);

    Route::get('backoffice/edit/{id}', [BackOfficeController::class, 'update']);
    Route::post('backoffice/edit/{id}', [BackOfficeController::class, 'edit']);

    Route::get('backoffice/delete/{id}', [BackOfficeController::class, 'delete']);
});


Route::get('/', [HomeController::class, 'showHome']);
Route::get('home', [HomeController::class, 'showHome']);
Route::get('product', [ProductController::class, 'showList']);
Route::get('product/{id}',[ProductController::class, 'showProduit']);
Route::get('cart', [CartController::class, 'showCart']);


Route::get('cart/add/{id}', [CartController::class, 'addToCart']);
Route::get('cart/update/{id}', [CartController::class, 'add']);
Route::get('cart/undo/{id}', [CartController::class, 'undo']);
Route::get('cart/remove/{id}',[CartController::class, 'remove']);


Route::get('/session/set/{id}',[SessionController::class, 'storeSessionDate']);
Route::get('/session/get',[SessionController::class, 'getSessionData']);
Route::get('/session/remove/{id}',[SessionController::class, 'deleteSessionData']);

Route::get('products', [ProductsController::class, 'index']);
Route::get('product/{id}', [ProductsController::class, 'show']);
