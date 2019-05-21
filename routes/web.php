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
public/categories#/2/2
*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/categories', 'CategoryController');
Route::get('/categories/{id}', 'CategoryController@show');

Route::resource('/', 'ArticleController');
Route::get('/{id}', 'ArticleController@show');

