<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maccaModel extends Model
{
    //
	public $table = "presidentes";
	public $primaryKey = "id";
	public $timestamps = false;
	public $guarded = [];
	public $fillable = ['prueba'];
}
