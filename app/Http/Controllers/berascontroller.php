<?php

namespace App\Http\Controllers;
use App\beras;
use Illuminate\Http\Request;
use session;
use App\Http\Controllers\Controller;
class berascontroller extends Controller
{
    public function index(Request $Request) {

		$beras= beras::Beras()->get();
		return view('beras/show', ['beras'=>$beras]);
	}

	public function create()
	{
		return view('beras/create');

	}
	public function store(Request $request) {
		$beras = new beras;
		$beras->tanggalMasuk = $request->tanggalMasuk;
		$beras->tanggalKeluar = $request->tanggalKeluar;
		$beras->jumlahBeras= $request->jumlahBeras;

		$beras-> save();

		return redirect('beras');

	}

	public function edit($id) {

		$beras = beras::find($id);

		if(!$beras)
			abort(404);
		return view('beras/edit', ['beras' => $beras]);
	}

	public function update($id , Request $request) {
		$beras = beras::find($id);
		$beras->tanggalMasuk = $request->tanggalMasuk;
		$beras->tanggalKeluar = $request->tanggalKeluar;
		$beras->jumlahBeras= $request->jumlahBeras;
		$beras-> save();

		return redirect('beras');
	}	
}
