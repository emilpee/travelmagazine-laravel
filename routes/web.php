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
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/categories', 'CategoryController');
Route::get('/categories/{id}', 'CategoryController@show');

Route::resource('/', 'ArticleController');
Route::get('/', 'AdController@index');
Route::get('/{id}', 'ArticleController@show'); 
Route::post('/{id}/edit','ArticleController@update')->name('update');
Route::get('/{id}/edit', 'ArticleController@edit');