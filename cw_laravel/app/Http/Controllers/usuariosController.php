<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\usuariosModel;

class usuariosController extends Controller
{
    //
	public function dibujar_servicios(){
		require_once 'serviceList.php'; //Hay un $serviceList = sarasa;
		return view('servicios2', compact('serviceList'));
	}
}
