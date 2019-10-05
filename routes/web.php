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



Route::get('/cliente', 'ClienteController@index');
Route::post('/cliente', 'ClienteController@store');

Route::get('/factura', 'FacturaController@index');
Route::post('/factura', 'FacturaController@store');

Route::get('/proveedor', 'ProveedorController@index');
Route::post('/proveedor', 'ProveedorController@store');

Route::post('/facturaattach', 'FacturaController@storeAttach');
Route::post('/facturasync', 'FacturaController@storeSync');

Route::get('/proveedorconsulta', 'ProveedorConsultaController@index');

Route::get('/cliente/calificacion', 'CalificacionController@index');
Route::post('/cliente/calificacion', 'CalificacionController@store');

Route::get('/proveedor/calificacion', 'CalificacionController@index2');
Route::post('/proveedor/calificacion', 'CalificacionController@store2');

Route::get('/producto/calificacion', 'CalificacionController@index3');
Route::post('/producto/calificacion', 'CalificacionController@store3');

