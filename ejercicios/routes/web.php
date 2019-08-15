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

Route::get('/pirulin', function () {
    return "Primeras palabras en Laravel";
});

Route::get('/pirulin/{number}', function ($number) {
    return "El doble del nro ingresado es " . 2*$number;
});


Route::get('/vista', function () {
    return view('vista1');
});

//Pruebas ConstruWorld

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

Route::get("/practica", "PracticaDH@listado");

Route::get("/ejem", "ejemplo@example");

Route::get("/paul", "maccaController@paul");

Route::get("/agregar", "maccaController@agregar");

Route::get("/servicios2", "maccaController@dibujar_servicios");

Route::get("/borrar/{numero}", ['uses' =>'maccaController@borrar']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
