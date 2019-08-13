<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ejemplo extends Model
{
    //
	public $table = "usuarios";
	//public $primaryKey = "ID";
	public $timestamps = false;
	public $guarded = [];
}
