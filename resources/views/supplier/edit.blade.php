@extends('layouts.app')

@section('content')


<form action="/supplier/{{$supplier->id}}" method="post">
	<h3 align="center">EDIT supplier</h3>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Nama Supplier
	</div>
	<input type="text" name="namaSupplier" value="{{$supplier->namaSupplier}}"  style="width: 200px" /><hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Alamat Supplier</div> 
	<input type="text" name="alamatSupplier" value="{{$supplier->alamatSupplier}}" style="width: 200px"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Nomor Telepon </div>
	<input type="tel" pattern="^\d{12}$" name="nomorTelepon" value="{{$supplier->nomorTelepon}}" style="width: 200px"/> <hr>
	<div class="col-md-8"></div>
	<a href="/supplier" class="btn btn-warning" role="button">Cancel</a>
	<input class="btn btn-info" type="submit" name="submit" value="save"  > 

	{{ csrf_field() }}

	<input type="hidden" name="_method" value="put">
	
</form>


@endsection
