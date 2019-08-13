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
		$base = usuariosModel::all();
		//dd($base);
		return view ('index.', compact('base'));
	}
}
