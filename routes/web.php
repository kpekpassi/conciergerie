<?php

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

/* ========================================== */
/*                    Admin                  */
/* ========================================== */

Route::match(['get', 'post'], '/', 'App\Http\Controllers\IndexController@index');

Route::get('/services-de-conciergerie-privée-entreprise-en-France-et-au-togo', function () {
    return view('pages/service');
});

Route::get('/notre-conciergerie-en-France-et-au-Togo', function () {
    return view('pages/apropos');
});

Route::match(['get', 'post'], 'temoignages-conciergerie-privée-entreprise-Togo-France', 'App\Http\Controllers\TemoignageController@listTemoignageFront')->name('liste.temoignage.front');

Route::match(['get', 'post'], 'nos-partenaires-pour-la-conciergerie', 'App\Http\Controllers\PartenaireController@index')->name('partenaire');

Route::match(['get', 'post'], 'demande-de-devis', 'App\Http\Controllers\DevisController@index')->name('demande.devis');

Route::match(['get', 'post', 'delete'], 'envoyer-un-devis', 'App\Http\Controllers\DevisController@demanderDevis')->name('envoyer.devis');

Route::match(['get', 'post', 'delete'], 'envoyer-un-devis-express', 'App\Http\Controllers\DevisController@demanderDevisExpress')->name('envoyer.devis.express');

/* ========================================== */
/*                    Admin                  */
/* ========================================== */

Route::prefix('admin')->group(function () {
    Route::match(['get', 'post', 'delete'], 'ajouter-un-temoignage', 'App\Http\Controllers\TemoignageController@index')->name('ajouter.temoignage');

    Route::match(['get', 'post', 'delete'], 'ajouter-un-utilisateur', 'App\Http\Controllers\UserController@index')->name('ajouter.utilisateur');

    Route::match(['get', 'post', 'delete'], 'enregistrer-un-utilisateur', 'App\Http\Controllers\UserController@ajouterUser')->name('enregistrer.user');

    Route::match(['get', 'post', 'delete'], 'enregistrer-un-temoignage', 'App\Http\Controllers\TemoignageController@ajouterTemoignage')->name('enregistrer.temoignage');

    Route::match(['get', 'post'], 'liste-temoignage', 'App\Http\Controllers\TemoignageController@listTemoignage')->name('liste.temoignage');

    Route::match(['get', 'post'], 'liste-utilisateur', 'App\Http\Controllers\UserController@listUser')->name('liste.user');

    Route::match(['get', 'post'], 'liste-devis', 'App\Http\Controllers\DevisController@listDevis')->name('liste.devis');

    Route::match(['get', 'post'], 'liste-devis-express', 'App\Http\Controllers\DevisController@listDevisExpress')->name('liste.devis.express');

    Route::match(['get', 'post'], 'modifier/temoignage/{id}', 'App\Http\Controllers\TemoignageController@modifierTemoignage')->name('modifier.temoignage.form');

    Route::match(['get', 'post'], 'edit/temoignage/{id}', 'App\Http\Controllers\TemoignageController@editTemoignage')->name('edit.temoignage');

    Route::match(['get', 'post','delete'],'delete/temoignage/{id}','App\Http\Controllers\TemoignageController@deleteTemoignage')->name('delete.temoignage');

    Route::match(['get', 'post','delete'],'delete/user/{id}','App\Http\Controllers\UserController@deleteuser')->name('delete.user');

    Route::match(['get', 'post','delete'],'valider/partenaire/{id}','App\Http\Controllers\PartenaireController@validerPartenaire')->name('valider.partenaire');

    Route::match(['get', 'post'], 'liste-partenaire', 'App\Http\Controllers\PartenaireController@listPartenaire')->name('liste.partenaire');

    Route::match(['get', 'post'], 'dashboard', 'App\Http\Controllers\UserController@dashboard')->name('index.dashboard');

    Route::match(['get', 'post'], 'login-user', 'App\Http\Controllers\UserController@login')->name('login.user');


});

Route::match(['get', 'post', 'delete'], 'enregistrer-un-partenaire', 'App\Http\Controllers\PartenaireController@devenirPartenaire')->name('enregistrer.partenaire');

Route::match(['get', 'post', 'delete'], 'deconnection', 'App\Http\Controllers\UserController@deconnection')->name('deconnection.user');

Route::get('/login', function () { 
    return view('backend/login');
});


Route::get('/list-partenaire', function () {
    return view('backend/listPartenaire');
});
