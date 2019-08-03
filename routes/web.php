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

Route::get('home', 'Front\HomeController@index');
Route::get('products', 'Front\ProductsController@index');
Route::get('products/{id}', 'Front\ProductsController@show');


/* Admin Panel Routes */

Route::get('admin/dashboard', 'Admin\DashboardController@index');