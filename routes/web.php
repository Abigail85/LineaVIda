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

// use App\proveedor;
// //use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plantilla', function () {
    
    return view('/vista/plantilla');
});
Route::resource('customers','CustomerController');
Route::get('customers/{id}/edit/','CustomerController@edit');
Route::get('customers/{id}/show/','CustomerController@show');

Route::resource('proveedores','ProveedorController');
Route::post('proveedores/save','ProveedorController@store');
Route::post('proveedores/eliminar',["as"=>"proveedores.eliminar", "uses"=>"ProveedorController@eliminar"]);
Route::get('proveedores/{id}/edit/','ProveedorController@edit');
Route::get('proveedores/{id}/show/','ProveedorController@show');
Route::get('proveedores/showall/','ProveedorController@showall');


Route::resource('lotes','LoteController');
Route::post('lotes/save','LoteController@store');
Route::post('lotes/eliminar',["as"=>"lotes.eliminar", "uses"=>"LoteController@eliminar"]);
Route::get('lotes/{id}/edit/','LoteController@edit');
Route::get('lotes/{id}/show/','LoteController@show');

Route::resource('especificacionlotes','especificacionLoteController');
Route::post('especificacionlotes/eliminar',["as"=>"especificacionlotes.eliminar", "uses"=>"especificacionLoteController@eliminar"]);
Route::post('especificacionlotes/save','especificacionLoteController@store');
Route::get('especificacionlotes/{id}/edit/','especificacionLoteController@edit');
Route::get('especificacionlotes/{id}/show/','especificacionLoteController@show');

Route::resource('facturas','FacturaController');
Route::post('facturas/eliminar',["as"=>"facturas.eliminar", "uses"=>"FacturaController@eliminar"]);
Route::post('facturas/save','FacturaController@store');
Route::get('facturas/{id}/edit/','FacturaController@edit');
Route::get('facturas/{id}/show/','FacturaController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
