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

Route::get('/articulos', 'ArticulosController@store');

Route::get('/articulos/create', 'ArticulosController@create');

Route::get('/articulos/show/{id}', 'ArticulosController@show')
    ->where(['id' => '[\d]+']);;

Route::get('/articulos/update/{id}', 'ArticulosController@update')
    ->where(['id' => '[\d]+']);;

Route::get('/articulos/delete/{id}', 'articulosController@delete');

Route::get('/clientes', 'ClientesController@index');

Route::get('/clientes/create', 'ClientesController@create');

Route::get('/clientes/show/{id}', 'ClientesController@show')
    ->where(['id' => '[\d]+']);

Route::get('/clientes/update/{id}', 'ClientesController@update')
    ->where(['id' => '[\d]+']);

Route::get('/clientes/delete/{id}', 'ClientesController@delete');
// {
//     return view('articulos/articulos');
// });

// Route::get('/articulos/edit/{id}', function ($id) {
//     return view('articulos/edit/edit', compact("id"));
// });
// // ->where(['id' => '[\d]+']);

// Route::get('/articulos/{param1}/mostrar/{param2}', function ($param1, $param2) {
//     return "Me envía articulos con {$param1} y con mostrar {$param2}";
// });