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
Route::get('loadmore', 'HomeController@loadmore');
Route::post('user/login', 'UsersController@submitLogin');
Route::get('user/logout', 'UsersController@sendLogout');
Route::get('dashboard', 'UsersController@showDashboard');

// Route::group(['before' => 'auth'], function()
// {
// });

//===========================Content===============================//
Route::post('content/store', 'ContentsController@store');
Route::get('content/kegiatan', 'ContentsController@showKegiatan');
Route::get('content/artikel', 'ContentsController@showArtikel');
Route::get('content/edit/{id}', 'ContentsController@edit');
Route::post('content/update/{id}', 'ContentsController@update');
Route::get('content/{id}', 'ContentsController@show');
Route::post('content/destroy/{id}', array('as' => 'deleteContent', 'uses' => 'ContentsController@destroy'));
Route::post('content/destroyPhoto/{id}', array('as' => 'deletePhoto', 'uses' => 'ContentsController@destroyPhoto'));
//=================================================================//

//===========================Serang================================//
Route::get('serang/pemerintahan', 'SerangsController@showPemerintahan');
Route::get('serang/galery', 'SerangsController@showGalery');
Route::get('serang/produk', 'SerangsController@showProduk');
Route::get('serang/sosok', 'SerangsController@showSosok');
Route::get('serang/kkn', 'SerangsController@showKkn');
Route::get('serang/map', 'SerangsController@showMap');
Route::get('serang/peternakan/{id}', 'PeternakansController@show');
// Route::get('serang/peternakan', 'PeternakansController@index');
Route::get('serang/pertanian/{id}', 'PertaniansController@show');
// Route::get('serang/pertanian', 'PertaniansController@index');
//=================================================================//

//===========================Wisata================================//
Route::get('wisata/stroberi', 'WisatasController@showStroberi');
Route::get('wisata/restarea', 'WisatasController@showRestarea');
Route::get('wisata/homestay', 'WisatasController@showHomestay');
Route::get('wisata/outbound', 'WisatasController@showOutbound');
Route::get('wisata/pinus', 'WisatasController@showPinus');
Route::get('wisata/kuda', 'WisatasController@showKuda');
Route::get('wisata/tic', 'TicsController@index');
//=================================================================//

Route::post('pertanian/store', 'PertaniansController@store');
Route::post('peternakan/store', 'PeternakansController@store');