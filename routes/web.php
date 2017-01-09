<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/', array('before'=>'auth.basic', 'as'=> 'index','uses'=>'ProduitController@index'));
Route::resource('produit', 'ProduitController');
Route::get('ajout', 'ProduitController@create');
Route::get('ordi', 'ProduitController@afficheOrdinateur');
Route::get('teles', 'ProduitController@afficheTeleviseur');
Route::get('tels', 'ProduitController@afficheTelephone');
Route::get('search', 'ProduitController@search');
Route::post('search', 'ProduitController@search');

Route::get('chariot', 'ChariotController@index');
Route::post('ajoutchariot', 'ChariotController@store');
Route::get('main', 'ChariotController@show');
Route::get('delete/{id}', array('before'=>'auth.basic','as'=>'delete_book_from_cart','uses'=>'ChariotController@delete'));
Route::post('order', array('before'=>'auth.basic','uses'=>'CommandeController@store'));
Route::get('orders', 'CommandeController@index');

Route::resource('userproduit', 'EspaceUserController');
Route::get('espace', 'EspaceUserController@index');


