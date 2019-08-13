<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PracticaDH extends Model
{
    //
	public $table = "usuarios";
	public $primaryKey = "ID";
	public $timestamps = false;
	public $guarded = [];
	
	public function getNombreCompleto(){
		return $this->nombre . " " . $this->apellido;
	}
}
