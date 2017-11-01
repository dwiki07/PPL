<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gudang;
use App\Http\Controllers\Controller;
use session;
class gudangcontroller extends Controller
{
    //
	public function index(Request $Request) {

		$gudang = gudang::all();

		return view('gudang/show', ['gudang' => $gudang]);
	}

	public function create()
	{
		return view('gudang/create');

	}
	public function store(Request $request) {
		$gudang = new gudang;
		$gudang->tangalPenerimaan = $request->tanggalPenerimaan;
		$gudang->tanggalPenggilingan = $request->tanggalPenggilingan;
		$gudang->jumlahGabah = $request->jumlahGabah;
		$gudang->hargaGabah = $request->hargaGabah;
		$gudang->IdSupplier = $request->IdSupplier;
		$gudang->tanggalMasuk = $request->tanggalMasuk;
		$gudang->tanggalKeluar = $request->tanggalKeluar;
		$gudang->jumlahBeras= $request->jumlahBeras;

		$gudang-> save();

		return redirect('gudang');

	}

	public function edit($id) {

		$gudang = gudang::find($id);

		if(!$gudang)
			abort(404);
		return view('gudang/edit', ['gudang' => $gudang]);
	}

	public function update($id , Request $request) {
		$gudang = gudang::find($id);
		$gudang->tangalPenerimaan = $request->tanggalPenerimaan;
		$gudang->tanggalPenggilingan = $request->tanggalPenggilingan;
		$gudang->jumlahGabah = $request->jumlahGabah;
		$gudang->hargaGabah = $request->hargaGabah;
		$gudang->IdSupplier = $request->IdSupplier;
		$gudang->tanggalMasuk = $request->tanggalMasuk;
		$gudang->tanggalKeluar = $request->tanggalKeluar;
		$gudang->jumlahBeras= $request->jumlahBeras;
		$gudang-> save();

		return redirect('gudang');
	}	
	public function destroy($id) {
		$gudang = gudang::find($id);
		$gudang->delete();

		return redirect('gudang');
	}
}
