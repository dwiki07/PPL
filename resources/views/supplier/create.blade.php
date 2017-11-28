@extends('layouts.app')

@section('content')

<form action="/supplier" method="post">
	
	<div class="panel panel-primary" style="border-color: lightblue;width: 800px; margin-left: 300px">
	<h3 align="center">CREATE</h3>
 	<br>
	<br>
	<div class="col-md-3"></div>
	<div class="col-md-3">
	Nama Supplier
	</div>
	<input style="width: 220px" type="text" class="required"  required="" name="namaSupplier"/><hr>
	<div class="col-md-3"></div>
	<div class="col-md-3">
	Alamat Supplier</div> 
	<input type="text" name="alamatSupplier" class="required" required="" style="width: 220px"/> <hr>
	<div class="col-md-3"></div>
	<div class="col-md-3">
	Nomor Telepon </div>
<<<<<<< HEAD
	<input type="number" name="nomorTelepon" class="required" required="" style="width: 220px"/> <hr>
=======
	<input type="tel" pattern="^\d{12}$"  name="nomorTelepon" style="width: 220px"/> <hr>
>>>>>>> d54ac960c8373b14fe6c1390c45564831947eb0b
	<div class="col-md-7"></div>
	<a href="/supplier" class="btn btn-warning" role="button" style="width: 76px">Cancel</a>
	<input class="btn btn-info" type="submit" name="submit" value="save" style="width: 76px" > 

	{{ csrf_field() }}
<br>
<br>
</form>
@endsection
 