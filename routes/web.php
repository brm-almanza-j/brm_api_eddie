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

/*Route::get('/regionales', function(){
    return view('regionales');
});*/
Route::prefix('admin')->group(function(){
    Route::resource('regionales', 'RegionalesController');
    Route::get('regionales/{id}/destroy',[
        'uses' => 'RegionalesController@destroy',
        'as' => 'regionales.destroy'
    ]);
    Route::resource('ciudades', 'CiudadesController');
    Route::resource('estados', 'EstadosController');
    Route::resource('franjashorarias', 'FranjasHorariasController');
    Route::resource('clientes', 'ClientesController');
    Route::resource('marcas', 'MarcasController');
    Route::resource('areas', 'AreasController');
    Route::resource('grupos', 'GruposController');
    Route::resource('perfiles', 'PerfilesController');
    Route::resource('usuarios','UsuariosController');
});

/*Route::group(['prefix' => 'admin'], function(){
    Route::resource('usuarios','UsuariosController');
});*/