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

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', ['as' => 'home',function(){
  return view('inicio');
}]);
Route::get('/mapa/{direccion?}',['as'=> 'ruta', function ($direccion = "Angamos") {
    //$direcciones = ['abc', 'def', 'ghi', 'jkl','mno','pqr'];
    $direcciones = [];
    return view('mapa', compact('direccion','direcciones'));
}]);
Route::get('/prueba',function(){
    return view('prueba');
});
