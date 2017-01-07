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
//Route::get('produit', 'ProduitController@getIndex');
//Route::get('chariot', 'ChariotController@getIndex');
//Route::get('suppr', 'ChariotController@getDelete');
//Route::get('suppr', 'ProduitController@get');
//Route::post('ajout', 'ChariotController@postAddToCart');
Route::get('/home', 'HomeController@index');
//Route::get('/', ['middleware' => 'guest', 'uses' => 'ChariotController@getIndex']);
Route::get('/', 'ProduitController@index');
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
//Route::get('delete/{id}', 'ChariotController@delete');
Route::get('delete/{id}', array('before'=>'auth.basic','as'=>'delete_book_from_cart','uses'=>'ChariotController@delete'));
Route::post('order', array('before'=>'auth.basic','uses'=>'CommandeController@store'));
Route::get('orders', array('before'=>'auth.basic','uses'=>'CommandeController@index'));




