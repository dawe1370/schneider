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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/informations', 'HomeController@informations')->name('informations');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/login', 'HomeController@login')->name('login');

Route::post('/checkin', 'VisitorController@doCheckIn')->name('checkin');
Route::post('/checkout', 'VisitorController@doCheckOut')->name('checkout');

Route::get('/export-logged-in', 'Tools\LogExporter@exportLoggedIn')->name('export.logged.in');