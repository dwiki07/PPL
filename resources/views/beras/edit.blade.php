@extends('layouts.app')

@section('content')


<form action="/beras/{{$beras->id}}" method="post">
	<h3 align="center">EDIT</h3>
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Masuk Beras</div>
	<input type="date" name="tanggalMasuk" value="{{$beras->tanggalMasuk}}"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Tanggal Keluar Beras</div>
	<input type="date" name="tanggalKeluar" value="{{$beras->tanggalKeluar}}"> <hr>
	<div class="col-md-4"></div>
	<div class="col-md-3">
	Jumlah Beras</div>
	<input type="number" name="jumlahBeras" value="{{$beras->jumlahBeras}}"> <hr>
	<div class="col-md-8"></div>
	<a href="/beras" class="btn btn-warning" role="button">Cancel</a>
	<input class="btn btn-info" type="submit" name="submit" value="save"  > 

	{{ csrf_field() }}

	<input type="hidden" name="_method" value="put">
	
</form>


@endsection
