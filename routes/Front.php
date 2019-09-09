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

Route::group(['namespace' => 'Front', 'as' => 'front.'], function () {
	Route::get('/', 'HomeController@index');
	Route::get('home', 'HomeController@index')->name('home');
	// Route::get('products', 'ProductsController@index')->name('products');
	// Route::get('products/{id}', 'ProductsController@show');
	Route::resource('products','ProductsController')->only(['index','show']);
});