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
Route::post('user/login', 'UsersController@submitLogin');
Route::get('user/logout', 'UsersController@sendLogout');

Route::group(['before' => 'auth'], function()
{
	Route::get('dashboard', 'UsersController@showDashboard');
});

//===========================Content===============================//
Route::post('content/store', 'ContentsController@store');
Route::get('content/kegiatan', 'ContentsController@showKegiatan');
Route::get('content/artikel', 'ContentsController@showArtikel');
Route::get('content/{id}', 'ContentsController@show');
//=================================================================//

//===========================Serang================================//
Route::get('serang/pemerintahan', 'SerangsController@showPemerintahan');
Route::get('serang/galery', 'SerangsController@showGalery');
Route::get('serang/produk', 'SerangsController@showProduk');
Route::get('serang/sosok', 'SerangsController@showSosok');
Route::get('serang/kkn', 'SerangsController@showKkn');
Route::get('serang/map', 'SerangsController@showMap');
//=================================================================//

//===========================Wisata================================//
Route::get('wisata/stroberi', 'WisatasController@showStroberi');
Route::get('wisata/restarea', 'WisatasController@showRestarea');
Route::get('wisata/homestay', 'WisatasController@showHomestay');
Route::get('wisata/outbound', 'WisatasController@showOutbound');
Route::get('wisata/kuda', 'WisatasController@showKuda');
Route::get('wisata/pinus', 'WisatasController@showPinus');
//=================================================================//

Route::post('pertanian/store', 'PertaniansController@store');
Route::post('peternakan/store', 'PeternakansController@store');