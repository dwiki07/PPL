@extends('layouts.app')

@section('content')

<form action="/gudang" method="post">
	<h3 align="center">CREATE</h3>
	<br>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Penerimaan 
	</div>
	<input type="date" name="tanggalPenerimaan"/><hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Penggilingan</div> 
	<input type="date" name="tanggalPenggilingan"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Jumlah Gabah (Kw) </div>
	<input type="text" name="jumlahGabah"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Harga Gabah</div>
	<input type="text" name="hargaGabah"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Id Supplier</div> 
	<input type="text" name="IdSupplier"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Masuk Beras</div>
	<input type="date" name="tanggalMasuk"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Keluar Beras</div>
	<input type="date" name="tanggalKeluar"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Jumlah Beras (Kw)</div>
	<input type="number" name="jumlahBeras"> <hr>
	<div class="col-md-8"></div>
	<a href="/gudang" class="btn btn-warning" role="button">Cancel</a>
	<input class="btn btn-info" type="submit" name="submit" value="save"  > 

	{{ csrf_field() }}

</form>
@endsection
 