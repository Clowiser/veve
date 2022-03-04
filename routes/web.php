<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackOfficeController;
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
Route::get('product', [ProductController::class, 'showList']);
Route::get('product/{id}',[ProductController::class, 'showProduit']);
Route::get('cart', [CartController::class, 'showCart']);


//BackOffice
Route::get('index', [BackOfficeController::class, 'index']);

Route::get('index/edit/{id}', [BackOfficeController::class, 'edit']);
Route::put('index/edit/{id}', [BackOfficeController::class, 'update']);

Route::get('index/create', [BackOfficeController::class, 'create']); // Ouvre la vue d'ajout 
Route::post('index', [BackOfficeController::class, 'store']); // Soumet le formulaire pour insérer l'enregistrement qui est un nouvel objet

Route::delete('index/delete/{id}', [BackOfficeController::class, 'destroy']);