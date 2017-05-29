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

Route::get('/', 'PublicoController@index', function() {
    return view('publico');
});

/*Llamadas al controlador Auth*/
//Route::get('login', 'AuthController@showLogin'); // Mostrar login
//Route::post('login', 'AuthController@postLogin'); // Verificar datos
//Route::get('logout', 'AuthController@logOut'); // Finalizar sesión

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('gerente', 'GerenteController');
Route::resource('almacen', 'AlmacenController');
Route::resource('mesero', 'MeseroController');
Route::resource('producto', 'ProductoController');
Route::resource('chef', 'ChefController');
Route::resource('pedido', 'PedidoController');
Route::resource('mesa', 'MesasController');
Route::resource('recepcionista', 'RecepcionistaController');
Route::resource('reservacion', 'ReservacionController');
Route::resource('cajero', 'CajeroController');

Route::get('/tablamenu', 'TablamenuController@index', function() {
	return view('tablamenu');
});

Route::get('/tablamesas', 'TablamesasController@index', function() {
    return view('tablamesas');
});

Route::get('/tablareservacion', 'TablareservacionController@index', function() {
    return view('tablareservacion');
});