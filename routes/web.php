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

/*Route::get('/', 'FrontController@index');*/

Route::get('/admin', function() {
	return view('admin/flight/index');
});
Route::resource('/admin/flight', 'AdminFlightController');
Route::resource('/admin/hotel', 'AdminHotelController');
Route::post('/image/store', 'ImageController@store')->name('image.store');