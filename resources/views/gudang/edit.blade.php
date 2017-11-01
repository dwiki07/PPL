@extends('layouts.master')

@section('content')


<form action="/gudang/{{$gudang->id}}" method="post">
	<h3 align="center">EDIT gudang</h3>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Penerimaan 
	</div>
	<input type="date" name="tanggalPenerimaan" value="{{$gudang->tanggalPenerimaan}}" /><hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Penggilingan</div> 
	<input type="date" name="tanggalPenggilingan" value="{{$gudang->tanggalPenggilingan}}"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Jumlah Gabah </div>
	<input type="text" name="jumlahGabah" value="{{$gudang->jumlahGabah}}"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Harga Gabah</div>
	<input type="date" name="hargaGabah" value="{{$gudang->hargaGabah}}"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Id Supplier</div> 
	<input type="date" name="IdSupplier" value="{{$gudang->IdSupplier}}"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Masuk Beras</div>
	<input type="date" name="tanggalMasuk" value="{{$gudang->tanggalMasuk}}"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Keluar Beras</div>
	<input type="date" name="tanggalKeluar" value="{{$gudang->tanggalKeluar}}"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Jumlah Beras</div>
	<input type="number" name="jumlahBeras" value="{{$gudang->jumlahBeras}}"> <hr>
	<div class="col-md-8"></div>
	<a href="/gudang" class="btn btn-warning" role="button">Cancel</a>
	<input class="btn btn-info" type="submit" name="submit" value="save"  > 

	{{ csrf_field() }}

	<input type="hidden" name="_method" value="put">
	
</form>


@endsection
