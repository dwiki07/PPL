@extends('layouts.app')

@section('content')
<div class="container">

<h3 align="center">HASIL</h3>   
<br>
<br>
<div class="col-md-4"></div>
<label>Hasil</label><br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>kualitas :</label></div><label>{{$kualitas->kualitas}}</label><br><hr>
<div class="col-md-4"></div>
<label>Detail</label> <br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Skor Hama :</label></div><label>{{$kualitas->cekHama}}</label><br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Skor Bau :</label></div><label>{{$kualitas->cekBau}}</label><br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>SkorDerajat Sosoh :</label></div><label>{{$kualitas->cekDerajatSosoh}}</label><br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Skor Kadar Air :</label></div><label>{{$kualitas->cekKadarAir}}</label><br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Skor Butir Utuh :</label></div><label>{{$kualitas->cekButirUtuh}}</label><br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Skor Butir Patah :</label></div><label>{{$kualitas->cekButirPatah}}</label><br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Skor Butir Menir :</label></div><label>{{$kualitas->cekButirMenir}}</label><br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Skor Butir Hijau :</label></div><label>{{$kualitas->cekButirHijau}}</label><br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Skor Butir Kuning Rusak :</label></div><label>{{$kualitas->cekButirKuningRusak}}</label><br>
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Skor Butir Gabah :</label></div><label>{{$kualitas->cekButirGabah}}</label><br>
<div class="col-md-4"></div>
  <a href="/beranda" class="btn btn-primary" role="button" style="width: 410px">Back</a>
</div>
@endsection
