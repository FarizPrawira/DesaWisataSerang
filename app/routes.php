<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('coba', function()
{
	// return View::make('hello');
});


Route::get('/', 'HomeController@showHome');
// Route::get('login', 'HomeController@showHome');
Route::post('user/login', 'UsersController@submitLogin');
Route::get('user/logout', 'UsersController@sendLogout');

Route::group(['before' => 'auth'], function()
{
	Route::get('dashboard', 'UsersController@showDashboard');
});

Route::post('content/store', 'ContentsController@store');

Route::get('content/pariwisata', 'ContentsController@showPariwisata');
Route::get('content/pertanian', 'ContentsController@showPertanian');
Route::get('content/produk', 'ContentsController@showProduk');
Route::get('content/budaya', 'ContentsController@showBudaya');
Route::get('content/unik', 'ContentsController@showUnik');