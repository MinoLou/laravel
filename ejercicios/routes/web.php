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

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/formu', function () {
    return view('formulario');
});


//Fin pruebas ConstruWorld

Route::get("/practica", "PracticaDH@listado");

Route::get("/ejem", "ejemplo@example");

Route::get("/paul", "maccaController@paul");

Route::get("/agregar", "maccaController@agregar");

Route::get("/modificar/{mandato}", "maccaController@modificar");

Route::get("/servicios2", "maccaController@dibujar_servicios");

Route::get("/borrar/{numero}", ['uses' =>'maccaController@borrar']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get("/ruta1", "maccaController@func1");

Route::get("/direruta1", "maccaController@direc1");

Route::get("/direruta2", "maccaController@direc2");

Route::get("/vistaform", "maccaController@formulario");

Route::get("/recibevar", "maccaController@recibevar");

Route::get('/formudb', function () {
    return view('formudb');
});

Route::get("/escribebase", "maccaController@escribebase");

Route::get("/modificabase", "maccaController@modificabase");

Route::get("/borrabase", "maccaController@borrarbase");
