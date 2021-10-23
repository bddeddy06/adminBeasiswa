<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class dt_ppa extends Model
{
	protected $table = "dtrains_ppa";
	protected $guarded = ["id"];

	public $timestamps = false;
}
