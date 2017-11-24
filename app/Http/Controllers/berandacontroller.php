<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\kualitas;
use App\gudang	;
use App\Http\Controllers\Controller;
use session;
class berandacontroller extends Controller
{
    //
	public function index(Request $Request) {

		$beranda = DB::table('kualitas')
        ->join('gudangs', 'gudangs.id', '=', 'kualitas.idGabah')
        ->join('suppliers', 'suppliers.id', '=', 'gudangs.idSupplier')
        ->select('namaSupplier','kualitas.*')
        ->orderBy('id_kualitas','asc')
        ->get();
		
		
		return view('beranda', ['beranda' => $beranda]);
	}
}
