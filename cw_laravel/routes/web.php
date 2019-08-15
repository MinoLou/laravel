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

//Rutas ConstruWorld

Route::get('/', function () {
    return view('index');
});

Route::get('/cw', function () {
    return view('index');
});


Route::get('/preguntas', function () {
    return view('preguntas');
});

Route::get('/servicios2', function () {
    return view('servicios2');
});

Route::get('/log1', function () {
    return view('log1');
});

Route::get('/reg1', function () {
    return view('reg1');
});

Auth::routes();

Route::get("/servicios2", "usuariosController@dibujar_servicios");

//Fin rutas ConstruWorld
