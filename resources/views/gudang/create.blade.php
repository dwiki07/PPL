@extends('layouts.app')

@section('content')

<form action="/gudang" method="post">
	<h3 align="center">CREATE</h3>
	<br>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Id Supplier</div>
	<div class="input-field">
		<select id="supplier" name="supplier" class="required" required="" style="width:200px" >
			<option value="">- Pilih -</option>
			@foreach($supplier as $supplier)
			<option value={{$supplier->id}}>{{$supplier->namaSupplier}}</option>
			@endforeach
		</select>
	</div>
	<hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
		Tanggal Penerimaan
	</div>
	<input style="width: 200px" type="date" class="required" required="" name="tanggalPenerimaan"/><hr>
	<div class="col-md-4"></div>
	
	<div class="col-md-3">
	Jumlah Gabah (Ton) </div>
	<input type="number" name="jumlahGabah" class="required" required="" style="width: 200px" /> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Harga Gabah</div>
	<input type="text" name="hargaGabah" class="required" required="" style="width: 200px" /> <hr>
	<div class="col-md-8"></div>
	<a href="/gudang" class="btn btn-warning" role="button">Cancel</a>
	<input class="btn btn-info" type="submit" name="submit" value="save"  > 

	{{ csrf_field() }}

</form>
@endsection
