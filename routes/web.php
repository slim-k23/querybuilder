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



Route::get('/', function () {
    return view('welcome');
});



Auth::routes();



// http://slimk23.sites.3wa.io:8000/produits
Route::get('produit','ProudctController@all_products')->name('produit');

Route::get('produit/{id}', 'ProudctController@detail')->name('detail');

Route::get('produits/create','ProudctController@getform')->name('create');

Route::post('produits/create','ProudctController@insertform');

Route::get('produits/update/{id}','ProudctController@getupdate')->name('update');

Route::put('produits/update','ProudctController@putupdate')->name('update_produit'); // name : update_produit


// create a route /produit/create that support get 
// create a route /produit/create that support post 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
