<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\clients;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Page

//Page Principal
Route::get('/', function () {
    return view('User.DashbordUser');
});


//Dashboard
Route::get('/dashboard',[UserController::class,'Dashboard'])->name('Dashboard');

//Produit
Route::get('/produit',[UserController::class,'P_Produit'])->name('Produit');

//AjouterProduit
Route::get('/ajout_produit',[UserController::class,'P_Ajout_produit'])->name('Ajout_Produit');

//AjouterProduit
Route::get('/modifier_produit',[UserController::class,'Modifier'])->name('Ajout_Produits');


//SupprimerProduit
Route::get('/supprimer_produit',[UserController::class,'Suppression'])->name('Suppression');

//Profil
Route::get('/profil',[UserController::class,'P_Profil'])->name('Profil');

//Comptabilité
Route::get('/comptability',[UserController::class,'P_comptabilite'])->name('Comptability');

//Historique
Route::get('/historique',[UserController::class,'P_Historique'])->name('Historique');

//Impression
Route::get('/impression',[UserController::class,'P_Impression'])->name('Impression');

//Recherche
Route::get('/recherche',[UserController::class,'P_Recherche'])->name('Recherche');


//Statistique
Route::get('/statistique',[UserController::class,'P_Statistique'])->name('Statistique');

//Proformat
Route::get('/pro_format',[UserController::class,'P_Pro_format'])->name('Pro_format');

//Bordereau de livraison
Route::get('/bordereau_livraison',[UserController::class,'P_Bordereau_livraison'])->name('Bordereau_livraison');

//AjouterProduit
Route::get('/client',[clients::class,'P_Ajout_client'])->name('Ajout_Client');

Route::post('/client',[clients::class,'Ajout_client'])->name('Ajout_Client');



