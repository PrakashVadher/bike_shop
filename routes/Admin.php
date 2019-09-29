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

Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function() {
	
	Route::get('admin/login', 'LoginController@index')->name('loginForm');
	Route::post('admin/login', 'LoginController@login')->name('loginPost');

	Route::group(['middleware' => 'admin'], function() {
		// Route::get('admin', 'DashboardController@dashboard')->name('admin');
		Route::get('admin/dashboard', 'DashboardController@dashboard')->name('dashboard');
		Route::get('admin/logout', 'DashboardController@logout')->name('logout');
		/* Admin Products */
		Route::prefix('admin')->group(function(){
			Route::resource('products','ProductsController');	
		});	
	});
});