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

Route::resource('/categories', 'CategoriesController');
Route::get('/categories/{id}', 'CategoriesController@show');

Route::resource('/', 'ArticleController');
Route::get('/{id}', 'ArticleController@show');

Route::get('/home', 'HomeController@index')->name('home');