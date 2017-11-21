@extends('layouts.app')

@section('content')

<form action="/supplier" method="post">
	<h3 align="center">CREATE</h3>
 	<br>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Nama Supplier
	</div>
	<input style="width: 200px" type="text" name="namaSupplier"/><hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Alamat Supplier</div> 
	<input type="text" name="alamatSupplier" style="width: 200px"/> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Nomor Telepon </div>
	<input type="text" name="nomorTelepon" style="width: 200px"/> <hr>
	<div class="col-md-8"></div>
	<a href="/supplier" class="btn btn-warning" role="button">Cancel</a>
	<input class="btn btn-info" type="submit" name="submit" value="save"  > 

	{{ csrf_field() }}

</form>
@endsection
 