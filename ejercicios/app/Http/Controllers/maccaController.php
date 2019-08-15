<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\maccaModel;

class maccaController extends Controller
{
    //
	public function paul(){
		echo "Este string se escribe en el controlador";
		$base = maccaModel::all();
		//dd($base);
		return view ('paul', compact('base'));
	}
	
	public function agregar(){
		$presidente = new maccaModel();
		$presidente->id = 101;
		$presidente->nombre = "Cristina Elisabet";
		$presidente->apellido = "Fernández de Kirchner";
		$presidente->mandato = "2007-2011";
		$presidente->save();
		echo "Presidente agregado <br> " . $presidente;
	}
	
	public function borrar(Request $form){
		//echo "Dato importado" . $form['numero'];
		$presidente = maccaModel::find($form['numero']);
		$presidente->delete();
		echo "Presidente borrado " . $presidente;
	}
	
	public function dibujar_servicios(){
		require_once 'serviceList.php';
		$tuki = "sasas";
	return view('servicios2', compact('serviceList'));
	}
}
