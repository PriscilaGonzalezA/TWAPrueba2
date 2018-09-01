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

Route::get('/welcome', [ 'as' => 'welcome', 'uses' => 'mapController@inicio']);
Route::get('/',['as' => 'home', 'uses'=>'EstacionamientosController@inicio']);
