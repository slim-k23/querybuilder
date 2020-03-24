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

// http://slimk23.sites.3wa.io:8000/produits
Route::get('produit','ProudctController@all_products');

Route::get('produit/{id}', 'ProudctController@detail')->name('detail');


