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

Route::get('/cw', function () {
    return view('index');
});


Route::get('/preguntas', function () {
    return view('preguntas');
});

Route::get('/servicios2', function () {
    return view('servicios2');
});

//Fin pruebas ConstruWorld
