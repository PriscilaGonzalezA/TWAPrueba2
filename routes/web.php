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

Route::get('/', [ 'as' => 'welcome', 'uses' => 'mapController@inicio']);
Route::get('/inicio',['as' => 'home', 'uses'=>'EstacionamientosController@inicio']);
