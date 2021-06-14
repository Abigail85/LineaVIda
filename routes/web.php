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

use App\proveedor;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/proveedores', function () {
    $proveedores=App\proveedor::orderBy('nombreProveedor')->paginate(10);
    
    
    
    
    
    return view('/vista/proveedores')->with("proveedores",$proveedores);
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