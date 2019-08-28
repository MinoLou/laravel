<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\maccaModel;

use Illuminate\Support\Facades\Input;

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
		$presidente->id = 102;
		$presidente->nombre = "Cristina Elisabet";
		$presidente->apellido = "Fernández de Kirchner";
		$presidente->mandato = "2019";
		$presidente->save();
		echo "Presidente agregado <br> " . $presidente;
	}
	
	public function modificar($mandato){
		$presidente = new maccaModel();
		$presidente = maccaModel::find(102);
		$presidente->nombre = "Cristina Elisabet";
		$presidente->apellido = "Fernández de Kirchner";
		$presidente->mandato = $mandato;
		$presidente->save();
		echo "Presidente modificado <br> " . $presidente;
		return view('home');
	}
	
	public function borrar(Request $form){
		//echo "Dato importado" . $form['numero'];
		$presidente = maccaModel::find($form['numero']);
		$presidente->delete();
		echo "Presidente borrado " . $presidente;
	}
	
	public function escribebase(){
		$presidente = new maccaModel();
		$id = maccaModel::all()->last()->id;
		$id++;
		$presidente->id = $id;
		$presidente->nombre = $_GET['nombre'];
		$presidente->apellido = $_GET['apellido'];
		$presidente->mandato = $_GET['mandato'];
		$presidente->save();
		echo "Presidente agregado <br> " . $presidente;
	}
	
	public function modificabase(){
		$presidente = new maccaModel();
		$presidente = maccaModel::find($_GET['nro']);
		$presidente->nombre = $_GET['nombre'];
		$presidente->apellido = $_GET['apellido'];
		$presidente->mandato = $_GET['mandato'];
		$presidente->save();
		echo "Presidente modificado<br> " . $presidente;
	}
	
	public function borrarbase(){
		$presidente = maccaModel::find($_GET['nro']);
		$presidente->delete();
		echo "Presidente borrado " . $presidente;
	}
	
	public function dibujar_servicios(){
		require_once 'serviceList.php';
		$tuki = "sasas";
	return view('servicios2', compact('serviceList'));
	}
	
	public function func1(){
		echo "Soy func 1";
		$this->func2();
	}
	
	public function func2(){
		echo "Soy func 2";
		return view ('func2');
	}
	
	public function direc1(){
		return Redirect::to('/direruta2');
	}
	
	public function direc2(){
		return view('direc2');
	}
	
	public function formulario(){
		return view ('formvariables');
	}
	
	public function recibevar(){
		$file_id = Input::get('file_id');
		echo $file_id;
		return view ('mostrarvar');
	}
}
