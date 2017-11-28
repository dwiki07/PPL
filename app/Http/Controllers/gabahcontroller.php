<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gabah;
use App\supplier;
use App\Http\Controllers\Controller;
use Session;
class gabahcontroller extends Controller
{
    //
	public function index(Request $Request) {
	
		$gabah= gabah::Gabah()->get();
	
	

        	
		return view('gabah/show', ['gabah' => $gabah]);
	}

	public function create()

	{
	
		$supplier = supplier::all();
	
		return view('gabah/create', ['supplier' => $supplier]);

	}
	public function store(Request $request) {
		$gabah = new gabah;
		$gabah->idSupplier = $request->supplier;
		$gabah->tanggalPenerimaan = $request->tanggalPenerimaan;
		$gabah->tanggalPenggilingan = $request->tanggalPenggilingan;
		$gabah->jumlahGabah = $request->jumlahGabah;
		$gabah->hargaGabah = $request->hargaGabah;
		$gabah-> save();

       Session::flash('message', 'Data Berhasil Disimpan!');
		return redirect('gabah');

	}

	public function edit($id) {

		$gabah = gabah::find($id);
		$supplier = supplier::all();

		if(!$gabah)
			abort(404);
		return view('gabah/edit', ['gabah' => $gabah,'supplier'=>$supplier]);
	}

	public function update($id , Request $request) {
		$gabah = gabah::find($id);
		$gabah->idSupplier = $request->supplier;
		$gabah->tanggalPenerimaan = $request->tanggalPenerimaan;
		$gabah->tanggalPenggilingan = $request->tanggalPenggilingan;
		$gabah->jumlahGabah = $request->jumlahGabah;
		$gabah->hargaGabah = $request->hargaGabah;
		
		$gabah-> save();
		Session::flash('message', 'Data Berhasil Diperbaharui!');
		return redirect('gabah');
	}	
}
