<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\kualitas;
use App\supplier;
use App\Http\Controllers\Controller;
use session;
class berandacontroller extends Controller
{
    //
	public function index(Request $Request) {

		$kualitas = kualitas::all();
		$supplier = DB::table('kualitas')
		->get()->toArray();
		$namaSupplier = DB::table('supplier')
		->where('idSupplier','=',$supplier[0]->idSupplier)
		->get();
		dd($namaSupplier);
		
		return view('beranda', ['kualitas' => $kualitas]);
	}

}
