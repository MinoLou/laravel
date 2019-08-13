<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\ejemplo;

class ejemplo extends Controller
{
    //
	public function example(){
		echo "Ejemplo";
		$base = ejemplo::all();
		dd($base);
	}
}
