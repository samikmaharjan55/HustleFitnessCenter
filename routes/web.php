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
Route::get('/','PageController@home');
Route::get('/pricesandpackages','PageController@pricesandpackages');
Route::get('/gallery','PageController@gallery');
Route::get('/shop','PageController@shop');
Route::get('/onlinepayment','PageController@onlinepayment');
Route::get('/aboutus','PageController@aboutus');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
