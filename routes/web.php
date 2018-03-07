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
Route::get('/products', function(){
	return view('products');
});

Route::get('/list_products', 'ProductController@listproduct');
Route::get('/login', 'loginController@formlogin');
Route::get('/cart', 'shoppingcartController@cart');
Route::get('/profil', 'profileController@index');
//newproductController
Route::get('/new_product', 'newproductController@newProducts');
Route::post('/newproduct_proses', 'newproductController@store');
Route::post('post', 'newproductController@store');
Route::post('/edit_product/{id}', 'newproductController@edit');
Route::get('/showeditproduct/{id}', 'newproductController@show');
Route::get('/delete_product', 'ProductController@destroy');



