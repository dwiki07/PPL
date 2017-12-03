<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kualitas;
use App\gabah	;
use App\Http\Controllers\Controller;
use session;
class berandacontroller extends Controller
{
    //
	public function index(Request $Request) {
			$beranda= kualitas::Kualitas()->get();
		
		
		return view('beranda', ['beranda' => $beranda]);
	}
}
