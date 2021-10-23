<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class InfoBeasiswa extends Model
{
	protected $table = "info_beasiswa";
	protected $guarded = ["id"];

	public $timestamps = false;

}
