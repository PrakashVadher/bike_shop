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

Route::get('/', 'Front\HomeController@index');

/*Route::get('home', 'Front\HomeController@index');
Route::get('products', 'Front\ProductsController@index');
Route::get('products/{id}', 'Front\ProductsController@show');*/



/* Admin Panel Routes  Start */
/*Route::get('control-panel', 'Admin\DashboardController@dashboard')->name('admin');
Route::get('dashboard/', 'Admin\DashboardController@dashboard');
Route::get('admin/dashboard', 'Admin\DashboardController@dashboard');*/

/* Admin Products */
/*Route::get('admin/products', 'Admin\ProductsController@index');
Route::get('admin/product/add', 'Admin\ProductsController@create');*/
/* Admin Panel Routes End */