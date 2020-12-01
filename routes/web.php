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

Route::get('/', 'ProductsController@index')->name('products.index');
Route::delete('//product/{product}', 'ProductsController@delete')->name('product.delete');
Route::post('/product', 'ProductsController@store')->name('products.store');
Route::get('/product', 'ProductsController@create')->name('products.create');
Route::get('/product/{product}', 'ProductsController@show')->name('products.show');
Route::put('/product/edit/{product}', 'ProductsController@update')->name('products.update');
Route::get('/product/edit/{product}', 'ProductsController@edit')->name('products.edit');


