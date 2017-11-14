<?php

namespace App\Http\Controllers;
use App\supplier;
use Illuminate\Http\Request;
use sesion;	
class supplierController extends Controller
{
	public function index(Request $Request) {

		$supplier = supplier::all();
		
		return view('supplier/show', ['supplier' => $supplier]);
	}
	public function create()
	{
		return view('supplier/create');
	}
	public function store(Request $request) {
		$supplier = new supplier;
		$supplier->namaSupplier = $request->namaSupplier;
		$supplier->alamatSupplier = $request->alamatSupplier;
		$supplier->nomorTelepon = $request->nomorTelepon;

		$supplier-> save();

		return redirect('supplier');

	}
	public function edit($id) {

		$supplier = supplier::find($id);

		if(!$supplier)
			abort(404);
		return view('supplier/edit', ['supplier' => $supplier]);
	}

	public function update($id , Request $request) {
		$supplier = supplier::find($id);
		$supplier->namaSupplier = $request->namaSupplier;
		$supplier->alamatSupplier = $request->alamatSupplier;
		$supplier->nomorTelepon = $request->nomorTelepon;
		$supplier-> save();

		return redirect('supplier');
	}	
}


