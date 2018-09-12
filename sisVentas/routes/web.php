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
Route::get('contralador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
//rutas basica
Route::get('/', function () {
    return view('auth/login');
});
//-----------------
Route::get('prueba', function () {
    return 'hola desde routes.php';
});


//-------------
Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');
Route::resource('ventas/cliente','ClienteController');
Route::resource('compras/proveedor','ProveedorController');
Route::resource('compras/ingreso','IngresoController');
Route::resource('ventas/venta','VentaController');


Route::auth();

Route::resource('/{slug?}','HomeController@index');
Route::get('almacen/categoria','PdfController@generar');















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
