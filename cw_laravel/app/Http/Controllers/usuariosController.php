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
	
	public function leerbase(Request $request){
		//echo "Este string se escribe en el controlador <br>";
		$var_sesion = $request->session()->all();
		$id_usuario = $request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'); //Devuelve un int con el id de usuario de la base de datos
		$id_usuario--; //Pues posición en array arranca de cero y contabilización en base de datos en uno.
		$base = usuariosModel::all();
		$datos_usuario = array("name" => $base[$id_usuario]['name'], "surname" => $base[$id_usuario]['surname'], "dni" => $base[$id_usuario]['dni'], "birthdate" => $base[$id_usuario]['birthdate'], "email" => $base[$id_usuario]['email'], "ext" => $base[$id_usuario]['ext'], "userkind" => $base[$id_usuario]['userkind'], "profesion" => $base[$id_usuario]['profesion'], "barrio" => $base[$id_usuario]['barrio']);
		session_start();
		$_SESSION['name'] = $datos_usuario['name'];
		$_SESSION['surname'] = $datos_usuario['surname'];
		$_SESSION['dni'] = $datos_usuario['dni'];
		$_SESSION['birthdate'] = $datos_usuario['birthdate'];
		$_SESSION['email'] = $datos_usuario['email'];
		$_SESSION['ext'] = $datos_usuario['ext'];
		$_SESSION['userkind'] = $datos_usuario['userkind'];
		$_SESSION['profesion'] = $datos_usuario['profesion'];
		$_SESSION['barrio'] = $datos_usuario['barrio'];
		return view ('home', compact('base', 'datos_usuario'));
		//Toma los datos de la base de datos y los pone en el array $datos_usuario para que los lea la vista home.blade.php. Además, los mete en variables de sesión.
	}
	
	/*public function varsesion(Request $request)
	{
		$var_sesion = $request->input();
		return view('sesion', compact('var_sesion'));
	}
	*/
}
