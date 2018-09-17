<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//homepage routes
Route::get('return','HomeController@return')->name('return');
Route::get('','HomeController@oneway')->name('oneway');

Route::get('buses','HomeController@book')->name('book');
Route::get('book/{id}','HomeController@create')->name('book.create');
// Route::get('book/{id}','HomeController@create')->name('book.create');
Route::post('book','HomeController@store')->name('book.store');
// Route::get('book/{id}','HomeController@receipt')->name('book.show');

Route::resource('bus', 'BusController');
Route::resource('seat', 'SeatController');
Route::resource('customer', 'CustomerController');
