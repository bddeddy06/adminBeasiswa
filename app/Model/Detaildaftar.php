<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Detaildaftar extends Model
{
	protected $table = 'detailpendaftar';
	protected $guarded = ['id'];

	public $timestamps = false;

	public function daftar()
	{
		return $this->belongsTo('App\Model\Daftar','pendaftar_id');
	}
}
