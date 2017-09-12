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
    return view('welcome');
});

Route::post('/r','QRController@guardarQR');
Route::get('/r', function(){ return view('welcome');});

Route::get('ficha/{id?}','QRController@ficha');

Route::any('ficha','QRController@ficha');

Route::match(array('GET', 'POST'),'/QR', 'QRController@listar');
Route::match(array('GET', 'POST'),'/QR/generar', 'QRController@generarQR');
Route::match(array('GET', 'POST'),'/QR/generar/{id?}', function ($id ) { return 'ID: '.$id;});
Route::match(array('GET', 'POST'),'/QR/listar', function () { return "LISTAR"; });
   
