<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/',"AdminController@index")->name('admin.index');
    Route::resource('categorie',"CategorieController");
    Route::resource('sous_categorie',"Sous_CategorieController");
    Route::resource('produit',"ProduitController");
    Route::resource('tache',"TachesController");
    Route::resource('commande',"CommandeController");
    Route::resource('service',"ServiceController");
    Route::resource('rayon',"RayonController");
    Route::resource('type_rayon',"Type_RayonController");
    Route::resource('evenement',"EvenementController");
    Route::resource('mail',"MailController");
    Route::resource('stats',"StatistiqueController");
    Route::resource('couleur',"CouleurController");
    Route::resource('message','MessageController');
    Route::get('information',function(){
        return view('Admin.information');
    });
    Route::get('profil',function(){
        return view('Admin.profil');
    });
});
