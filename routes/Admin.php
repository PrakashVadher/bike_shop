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

Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function(){
	Route::get('admin', 'DashboardController@dashboard')->name('admin');
	Route::get('admin/dashboard/', 'DashboardController@dashboard')->name('dashboard');
	
	/* Admin Products */
	Route::get('admin/products', 'ProductsController@index')->name('all_products');
	Route::get('admin/product/add', 'ProductsController@create')->name('add_products');
	Route::post('admin/product/save', 'ProductsController@store')->name('save_product');

	Route::get('admin/product/show', 'ProductsController@show')->name('show_product');
	Route::get('admin/product/edit', 'ProductsController@edit')->name('edit_product');
	Route::post('admin/product/update', 'ProductsController@update')->name('update_product');
	Route::get('admin/product/delete', 'ProductsController@remove')->name('delete_product');
});