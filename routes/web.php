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

Route::get('/', 'FrontController@index');
Route::post('/flight-search', 'FrontController@searchFlights')->name('flight-search');
Route::get('/flight-pagination', 'FrontController@paginateFlights');
Route::post('/hotel-search', 'FrontController@searchHotels')->name('hotel-search');

Route::get('/admin', function() {
	return view('admin/flight/index');
});
Route::resource('/admin/flight', 'AdminFlightController');
Route::resource('/admin/hotel', 'AdminHotelController');
Route::post('/image/store', 'ImageController@store')->name('image.store');

Route::post('login', 'LoginController@login')->name('login');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login_form');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');
