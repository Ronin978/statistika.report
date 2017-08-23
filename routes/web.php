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

Route::resource('/', 'FrontController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/QuickFind', 'FrontController@QuickFind');

Route::get('/report/create1', 'ReportController@create1');
Route::get('/report/create2', 'ReportController@create2');
Route::get('/report/create3', 'ReportController@create3');
Route::get('/report/create4', 'ReportController@create4');

Route::post('/report/store1', 'ReportController@store1');
Route::post('/report/store2', 'ReportController@store2');
Route::post('/report/store3', 'ReportController@store3');
Route::post('/report/store4', 'ReportController@store4');


Route::resource('/groups', 'GroupController');

