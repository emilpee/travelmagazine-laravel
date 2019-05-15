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

Route::get('/', function() {
    return view('welcome');
});

<<<<<<< HEAD
Route::resource('welcome', 'ArticleController');
=======

Route::resource('/article','ArticleController');
>>>>>>> 2167d5ecef900c78cb6ec492c2ee356e5a81ad6b

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/articles', 'ArticleController');