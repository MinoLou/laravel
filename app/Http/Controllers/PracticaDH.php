<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PracticaDH;

class PracticaDH extends Controller
{
    //
	public function listado(){
		$data = PracticaDH::all();
		
		var_dump($data);
	}
}
