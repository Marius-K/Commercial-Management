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

Auth::routes();

Route::get('/', 'HomeController@index')->name('welcome');
// Products
Route::get('/products', 'ProductController@index')->name('products');
Route::post('/products', 'ProductController@store');
Route::get('/products/create', 'ProductController@create');
Route::get('/products/{product}', 'ProductController@show');
Route::put('/products/{product}', 'ProductController@update');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::get('/products/{product}/delete', 'ProductController@destroy');

// Suppliers
Route::get('/suppliers', 'SupplierController@index')->name('suppliers');
Route::post('/suppliers', 'SupplierController@store');
Route::get('/suppliers/create', 'SupplierController@create');
Route::get('/suppliers/{supplier}', 'SupplierController@show');
Route::put('/suppliers/{supplier}', 'SupplierController@update');
Route::get('/suppliers/{supplier}/edit', 'SupplierController@edit');
Route::get('/suppliers/{supplier}/delete', 'SupplierController@destroy');
