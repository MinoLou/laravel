<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maccaModel extends Model
{
    //
	public $table = "usuarios";
	public $primaryKey = "id";
	public $timestamps = false;
	public $guarded = [];
}
