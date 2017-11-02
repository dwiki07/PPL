<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kualitas;
use App\Http\Controllers\Controller;
use session;
class berandacontroller extends Controller
{
    //
	public function index(Request $Request) {

		$kualitas = kualitas::all();
		
		return view('beranda', ['kualitas' => $kualitas]);
	}

}
