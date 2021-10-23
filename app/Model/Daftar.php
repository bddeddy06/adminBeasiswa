<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
	protected $table = 'pendaftar';

	protected $fillable = ['id','jumlah_tanggungan','penghasilan_ortu','jumlah_sks','ipk','keputusan'];

	public $timestamps = false;

	public function detail()
	{
		return $this->belongsTo('App\Model\Detaildaftar','detailpendaftar_id');
	}
}
