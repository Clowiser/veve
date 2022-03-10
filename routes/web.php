<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\CompteController;

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\Auth;


Route::get('/', [HomeController::class, 'showHome'])->name('home');
Route::get('home', [HomeController::class, 'showHome']);
Route::get('product', [ProductController::class, 'showList']);
Route::get('product/{id}',[ProductController::class, 'showProduct']);
Route::get('cart', [CartController::class, 'showCart']);


//BackOffice
//page accueil
Route::get('index', [BackOfficeController::class, 'index']); // get : j'accède à la ressource index

//editer un produit
Route::get('index/edit/{id}', [BackOfficeController::class, 'edit']); // get : j'accède à la ressource edit id
Route::put('index/edit/{id}', [BackOfficeController::class, 'update']); //put : je met à jour la ressource 

//créer un produit
Route::get('index/create', [BackOfficeController::class, 'create']); // get : j'accède à la view create
Route::post('index', [BackOfficeController::class, 'store']); // post : soumission de formulaire : ajoute une ressource

//supprimer un produit
Route::delete('index/delete/{id}', [BackOfficeController::class, 'destroy']); // je supprime la ressource à l'id indiqué

// GET pour accéder à la ressource 
// PUT pour mettre à jour une ressource
// POST pour insérer une ressource + requête au serveur qui renvoie la ressource concernée 
// DELETE pour supprimer une ressource

//Login
Route::get('login', [ConnexionController::class, 'showLogin']); // retourne la vue du formulaire
Route::post('login', [ConnexionController::class, 'connexion']); // pour effectuer le traitement du formulaire

Route::get('compte', [CompteController::class, 'showCompte'])->middleware('App\Http\Middleware\Auth');
//seul les personnes authentifiées pourront, une fois connectée, accéder à cette page via l'ajout du middleware avec 'auth'

Route::get('deconnexion', [ConnexionController::class, 'deconnexion'])->middleware('App\Http\Middleware\Auth');