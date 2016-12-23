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

Route::get('/', 'HomeController@index');
// Auth::routes();

Route::group(['prefix' => 'superadmin'], function() {
    Route::get('/', 'SuperAdminController@index');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index');
});
Route::group(['prefix' => 'courtier'], function() {
    Route::get('/', 'CourtierController@index');
});
