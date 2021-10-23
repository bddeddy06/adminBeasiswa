<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\InfoBeasiswa;

class ApiController extends Controller
{
	public function getJadwal()
	{
		$data = InfoBeasiswa::all();
		return $data;
	}
}
