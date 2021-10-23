<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
	protected $table = "jurusan";
	protected $guarded = ["id"];

	public $timestamps = false;
}
