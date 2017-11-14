@extends('layouts.app')

@section('content')


<form action="/gudang/{{$gudang->id}}" method="post">
	<h3 align="center">EDIT gudang</h3>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Id Supplier</div>
	<div class="input-field">
		<select id="accessRight" name="accessRight" class="required" required="" style="width:200px">
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
	<input type="text" name="hargaGabah" value="{{$gudang->hargaGabah}}"> <hr>
	<div class="col-md-8"></div>
	<a href="/gudang" class="btn btn-warning" role="button">Cancel</a>
	<input class="btn btn-info" type="submit" name="submit" value="save"  > 

	{{ csrf_field() }}

	<input type="hidden" name="_method" value="put">
	
</form>


@endsection
