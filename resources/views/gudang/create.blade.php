@extends('layouts.master')

@section('content')

<form action="/gudang" method="post">
	<h3 align="center">CREATE gudang</h3>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Nama Pemesan </div>
	<input type="text" name="nama" /> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"> 
	Alamat </div>
	<input type="text" name="alamat"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	tujuan </div>
	<select name="tujuan">
		<option>Pilih</option>
		<option>Surabaya</option>
		<option>Malang</option>
		<option>Jogja</option>
		<option>Bali</option>
	</select><hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	tanggalPesan </div>
	<input type="date" name="tanggalPesan"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	tanggalBerangkat </div>
	<input type="date" name="tanggalBerangkat"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
 	totalHari </div>
	<input type="number" name="totalHari"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3"></div>
	<a href="/gudang" class="btn btn-warning" role="button">Cancel</a>
	<input type="submit" class="btn btn-primary" name="submit" value="Create">

	{{ csrf_field() }}

</form>
@endsection
 