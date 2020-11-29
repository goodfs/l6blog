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

Route::get("orc","UserController@index");

Route::get('add','UserController@modelTest');
Route::get('con','UserController@testCollection');
Route::get('cache','UserController@cacheTest');
Route::get('facade','UserController@facadeTest');
