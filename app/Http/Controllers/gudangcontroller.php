<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;	
use App\gudang;
use App\supplier;
use App\Http\Controllers\Controller;
use Session;
class gudangcontroller extends Controller
{
    //
	public function index(Request $Request) {


		$gudang = DB::table('gudangs')
        ->join('suppliers', 'suppliers.id', '=', 'gudangs.idSupplier')
        ->select('namaSupplier','gudangs.*')
        ->whereNull('tanggalPenggilingan')
        // ->where('tanggalPenggilingan' ,'IS NULL', null)
        ->get();

        	
		return view('gudang/show', ['gudang' => $gudang]);
	}

	public function create()
	{
		$supplier = supplier::all();
	
		return view('gudang/create', ['supplier' => $supplier]);

	}
	public function store(Request $request) {
		$gudang = new gudang;
		$gudang->idSupplier = $request->supplier;
		$gudang->tanggalPenerimaan = $request->tanggalPenerimaan;
		$gudang->tanggalPenggilingan = $request->tanggalPenggilingan;
		$gudang->jumlahGabah = $request->jumlahGabah;
		$gudang->hargaGabah = $request->hargaGabah;
		$gudang-> save();

        	Session::flash('message', 'Data Berhasil Disimpan!');
		return redirect('gudang');

	}

	public function edit($id) {

		$gudang = gudang::find($id);
		$supplier = supplier::all();

		if(!$gudang)
			abort(404);
		return view('gudang/edit', ['gudang' => $gudang,'supplier'=>$supplier]);
	}

	public function update($id , Request $request) {
		$gudang = gudang::find($id);
		$gudang->idSupplier = $request->supplier;
		$gudang->tanggalPenerimaan = $request->tanggalPenerimaan;
		$gudang->tanggalPenggilingan = $request->tanggalPenggilingan;
		$gudang->jumlahGabah = $request->jumlahGabah;
		$gudang->hargaGabah = $request->hargaGabah;
		
		$gudang-> save();
		Session::flash('message', 'Data Berhasil Diperbaharui!');
		return redirect('gudang');
	}	
}
