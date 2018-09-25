<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Rutas Clientes
 */
Route::get('clientes', 'ClientesController@index')->name('viewCliente');
//Route::get('clientes', 'ClientesController@getAllClientes')->name('getAllCliente');
Route::post('clientes', 'ClientesController@addClientes')->name('addCliente');
Route::get('clientes/{id}', 'ClientesController@getClientes')->name('getCliente');
Route::put('clientes/{id}', 'ClientesController@editClientes')->name('editCliente');
Route::delete('clientes/{id}', 'ClientesController@deleteCliente')->name('deleteCliente');


/**
 * Rutas Regionales
 */
Route::get('regionales', 'RegionalesController@index')->name('viewRegional');
//Route::get('regionales', 'RegionalesController@getAllRegionales')->name('getAllRegional');
Route::post('regionales', 'RegionalesController@addRegionales')->name('addRegional');
Route::get('regionales/{id}', 'RegionalesController@getRegionales')->name('getRegional');
Route::put('regionales/{id}', 'RegionalesController@editRegionales')->name('editRegional');
Route::delete('regionales/{id}', 'RegionalesController@deleteRegionales')->name('deleteRegional');

/**
 * Rutas Ciudades
 */
Route::get('ciudades', 'CiudadesController@index')->name('viewCiudad');
//Route::get('ciudades', 'CiudadesController@getAllCiudades')->name('getAllCiudad');
Route::post('ciudades', 'CiudadesController@addCiudades')->name('addCiudad');
Route::get('ciudades/{id}', 'CiudadesController@getCiudades')->name('getCiudad');
Route::get('ciudades_regionales/{id}', 'CiudadesController@getC')->name('getCiudadRegional');
Route::put('ciudades/{id}', 'CiudadesController@editCiudades')->name('editCiudad');
Route::delete('ciudades/{id}', 'CiudadesController@deleteCiudades')->name('deleteCiudad');

/**
 * Rutas Areas
 */
Route::get('areas', 'AreasController@index')->name('viewArea');
//Route::get('areas', 'AreasController@getAllAreas')->name('getAllArea');
Route::post('areas', 'AreasController@addAreas')->name('addArea');
Route::get('areas/{id}', 'AreasController@getAreas')->name('getArea');
Route::put('areas/{id}', 'AreasController@editAreas')->name('editArea');
Route::delete('areas/{id}', 'AreasController@deleteAreas')->name('deleteArea');

/**
 * Rutas Estados
 */
Route::get('estados', 'EstadosController@index')->name('viewEstado');
//Route::get('estados', 'EstadosController@getAllEstados')->name('getAllEstado');
Route::post('estados', 'EstadosController@addEstados')->name('addEstado');
Route::get('estados/{id}', 'EstadosController@getEstados')->name('getEstado');
Route::put('estados/{id}', 'EstadosController@editEstados')->name('editEstado');
Route::delete('estados/{id}', 'EstadosController@deleteEstados')->name('deleteEstado');

/**
 * Rutas Franjas Horarias
 */
Route::get('franjas', 'FranjasHorariasController@index')->name('viewFranjas');
//Route::get('franjas', 'FranjasHorariasController@getAllFranjas')->name('getAllFranjas');
Route::post('franjas', 'FranjasHorariasController@addFranjas')->name('addFranjas');
Route::get('franjas/{id}', 'FranjasHorariasController@getFranjas')->name('getFranjas');
Route::put('franjas/{id}', 'FranjasHorariasController@editFranjas')->name('editFranjas');
Route::delete('franjas/{id}', 'FranjasHorariasController@deleteFranjas')->name('deleteFranjas');

/**
 * Rutas Grupos
 */
Route::get('grupos', 'GruposController@index')->name('viewGrupo');
//Route::get('grupos', 'GruposController@getAllGrupos')->name('getAllGrupo');
Route::post('grupos', 'GruposController@addGrupos')->name('addGrupo');
Route::get('grupos/{id}', 'GruposController@getGrupos')->name('getGrupo');
Route::put('grupos/{id}', 'GruposController@editGrupos')->name('editGrupo');
Route::delete('grupos/{id}', 'GruposController@deleteGrupos')->name('deleteGrupo');

/**
 * Rutas Marcas
 */
Route::get('marcas', 'MarcasController@index')->name('viewMarca');
//Route::get('marcas', 'MarcasController@getAllMarcas')->name('getAllMarca');
Route::post('marcas', 'MarcasController@addMarcas')->name('addMarca');
Route::get('marcas/{id}', 'MarcasController@getMarcas')->name('getMarca');
Route::get('marcas_clientes/{id}', 'MarcasController@getM')->name('getMarcaCliente');
Route::put('marcas/{id}', 'MarcasController@editMarcas')->name('editMarca');
Route::delete('marcas/{id}', 'MarcasController@deleteMarcas')->name('deleteMarca');

/**
 * Rutas Perfiles
 */
Route::get('perfiles', 'PerfilesController@index')->name('viewPerfil');
//Route::get('perfiles', 'PerfilesController@getAllPerfiles')->name('getAllPerfil');
Route::post('perfiles', 'PerfilesController@addPerfiles')->name('addPerfil');
Route::get('perfiles/{id}', 'PerfilesController@getPerfiles')->name('getPerfil');
Route::put('perfiles/{id}', 'PerfilesController@editPerfiles')->name('editPerfil');
Route::delete('perfiles/{id}', 'PerfilesController@deletePerfiles')->name('deletePerfil');

/**
 * Rutas Tipos OT
 */
Route::get('tiposots', 'TiposOtsController@index')->name('viewTipo');
//Route::get('tiposots', 'TiposOtsController@getAllTipos')->name('getAllTipo');
Route::post('tiposots', 'TiposOtsController@addTipos')->name('addTipo');
Route::get('tiposots/{id}', 'TiposOtsController@getTipos')->name('getTipo');
Route::get('tipo_grupo/{id}', 'TiposOtsController@getT')->name('getTipoGrupo');
Route::put('tiposots/{id}', 'TiposOtsController@editTipos')->name('editTipo');
Route::delete('tiposots/{id}', 'TiposOtsController@deleteTipos')->name('deleteTipo');

/**
 * Rutas Usuarios
 */
Route::get('usuarios', 'UsuariosController@index')->name('viewUsuario');
//Route::get('usuarios', 'UsuariosController@getAllUsuarios')->name('getAllUsuario');
Route::post('usuarios', 'UsuariosController@addUsuarios')->name('addUsuario');
Route::get('usuarios/{id}', 'UsuariosController@getUsuarios')->name('getUsuario');
Route::put('usuarios/{id}', 'UsuariosController@editUsuarios')->name('editUsuario');

/**
 * Rutas Usuarios Detalles
 */
Route::get('usuariosdetalles', 'UsuariosDetallesController@index')->name('viewUsuario');
//Route::get('usuariosdetalles', 'UsuariosDetallesController@getAllUsuarios')->name('getAllUsuario');
Route::post('usuariosdetalles', 'UsuariosDetallesController@addUsuarios')->name('addUsuario');
Route::get('usuariosdetalles/{id}', 'UsuariosDetallesController@getUsuarios')->name('getUsuario');
Route::put('usuariosdetalles/{id}', 'UsuariosDetallesController@editUsuarios')->name('editUsuario');

/**
 * Rutas Ots
 */
Route::get('ots/{id}', 'OrdenesTrabajosController@index')->name('viewOts');
//Route::get('ots', 'OrdenesTrabajosController@getAllOts')->name('getAllOts');
Route::post('ots', 'OrdenesTrabajosController@addOts')->name('addOts');
Route::get('get_ots/{id}', 'OrdenesTrabajosController@getOts')->name('getOts');
Route::put('ots/{id}', 'OrdenesTrabajosController@editOts')->name('editOts');

/**
 * Rutas Filtros
 */
Route::get('ots_estados/{id}', 'OrdenesTrabajosController@getOtsEst')->name('getOtsEstados');

/**
 * Rutas Login
 */
Route::post('login', 'LoginController@auth')->name('auth');
Route::get('login/{id}', 'LoginController@logout')->name('logout');