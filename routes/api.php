<?php

use App\Http\Api\ProductsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
| https://kholima.com/comment-creer-une-application-crud-rest-api-avec-laravel/
| Comment créer une application CRUD REST API avec Laravel
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Base - afficher la liste des produits & un produit
Route::get('products', [ProductsController::class, 'showListApi']);
Route::get('product/{id}', [ProductsController::class, 'showProductApi']);

//Update un produit
Route::put('product/{id}', [ProductsController::class, 'update']);

//Delete un produit
Route::delete('product/{id}', [ProductsController::class, 'destroy']);

//Créer un produit
Route::post('products', [ProductsController::class, 'create']);