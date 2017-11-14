@extends('layouts.app')

@section('content')

<H3 align="center">CEK KUALITAS</H3>
<div class="container">
  <form method="post" class="form-tambah" action="{{ url ('kualitas/check')}}">

{{-- <form action="/kualitas" method="post"> --}}
      {{-- {{csrf_field()}} --}}
    {{-- <div class="row">



      <div class="col-md-4 " >
        <label for="Supplier">Nama Supplier</label>
      </div>
      <div class="input-field col-md-6 " >
        <select id="Supplier" name="cek_warna" class="required" required="" style="width:200px">
          <option value="">----Pilih----</option>
          <option value="1">Dwiki</option>
          <option value="2">Aditya</option>
          <option value="3">Indarto</option>
          <option value="4">Ganteng</option>
        </select>
      </div>
    </div> --}}
    <div class="col-md-4"></div>
    <div class="row">
      <div class="col-md-2">
        <label for="Hama">Id supplier</label>
      </div>
      <div class="col-md-4">
        <div class="input-field col-md-6    ">
         <select id="supplier" name="supplier" class="required" required="" style="width:200px">
      <option value="">- Pilih -</option>
      @foreach($supplier as $supplier)
      <option value={{$supplier->namaSupplier}}>{{$supplier->namaSupplier}}</option>
      @endforeach
    </select>
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-4"></div>
    <div class="row">
      <div class="col-md-2">
        <label for="Hama">Cek Hama</label>
      </div>
      <div class="col-md-4">
        <div class="input-field col-md-6    ">
          <select id="cek_hama" name="cek_hama" class="required" required="" style="width:200px">
            <option value="">- Pilih -</option>
            <option value="100">Tidak Ada</option>
            <option value="50">Ada</option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-4"></div>
    <div class="row">
      <div class="col-md-2">
        <label for="Bau">Cek Bau Busuk/Asam</label>
      </div>
      <div class="col-md-4">
        <div class="input-field col-md-6    ">
          <select id="cek_bau" name="cek_bau" class="required" required="" style="width:200px">
            <option value="">- Pilih -</option>
            <option value="100">Tidak Ada</option>
            <option value="50">Ada</option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-4"></div>
    <div class="row">
      <div class="col-md-2">
        <label for="Derajat">Cek Derajat Sosoh</label>
      </div>
      <div class="col-md-4">
        <div class="input-field col-md-6    ">
          <select id="cek_derajat_sosoh" name="cek_derajat_sosoh" class="required" required="" style="width:200px">
            <option value="">- Pilih -</option>
            <option value="100">96%-100%</option>
            <option value="80">90%-95%</option>
            <option value="30">< 90%</option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-4"></div>
    <div class="row">
      <div class="col-md-2">
        <label for="Air">Cek Kadar Air</label>
      </div>
      <div class="col-md-4">
       <div class="input-field col-md-6    ">
        <select id="cek_kadar_air" name="cek_kadar_air" class="required" required="" style="width:200px">
          <option value="">- Pilih -</option>
          <option value="100">< 10%</option>
          <option value="80">11%-15%</option>
          <option value="30">> 15%</option>
        </select>
      </div>
    </div>
  </div>
  <br>
  <div class="col-md-4"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Utuh">Cek Butir Utuh</label>
    </div>
    <div class="col-md-4">
      <div class="input-field col-md-6    ">
        <select id="cek_butir_utuh" name="cek_butir_utuh" class="required" required="" style="width:200px">
          <option value="">- Pilih -</option>
          <option value="100">< 40%</option>
          <option value="80">35-40%</option>
          <option value="30">< 35%</option>
        </select>
      </div>
    </div>
  </div>
  <br>
  <div class="col-md-4"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Patah">Cek Butir Patah</label>
    </div>
    <div class="col-md-4">
      <div class="input-field col-md-6    ">
        <select id="cek_butir_patah" name="cek_butir_patah" class="required" required="" style="width:200px">
          <option value="">- Pilih -</option>
          <option value="100">< 10%</option>
          <option value="80">10%-20%</option>
          <option value="30">> 20%</option>
        </select>
      </div>
    </div>
  </div>
  <br>
  <div class="col-md-4"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Patah">Cek Butir Menir</label>
    </div>
    <div class="col-md-4">
      <div class="input-field col-md-6    ">
        <select id="cek_butir_menir" name="cek_butir_menir" class="required" required="" style="width:200px">
          <option value="">- Pilih -</option>
          <option value="100">0%</option>
          <option value="80">1%-3%</option>
          <option value="30">> 3%</option>
        </select>
      </div>
    </div>
  </div>
  <br>
  <div class="col-md-4"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Patah">Cek Butir Hijau</label>
    </div>
    <div class="col-md-4">
      <div class="input-field col-md-6    ">
        <select id="cek_butir_hijau" name="cek_butir_hijau" class="required" required="" style="width:200px">
          <option value="">- Pilih -</option>
          <option value="100">Tidak Ada</option>
          <option value="50">Ada</option>
        </select>
      </div>
    </div>
  </div>
  <br>
  <div class="col-md-4"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Patah">Cek Butir Kuning/Rusak</label>
    </div>
    <div class="col-md-4">
      <div class="input-field col-md-6    ">
        <select id="cek_butir_kuning_rusak" name="cek_butir_kuning_rusak" class="required" required="" style="width:200px">
          <option value="">- Pilih -</option>
          <option value="100">Tidak Ada</option>
          <option value="50">Ada</option>
        </select>
      </div>
    </div>
  </div>
  <br>
  <div class="col-md-4"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Patah">Cek Butir Gabah</label>
    </div>
    <div class="col-md-4">
      <div class="input-field col-md-6 ">
        <select id="cek_butir_gabah" name="cek_butir_gabah" class="required" required="" style="width:200px">
          <option value="">- Pilih -</option>
          <option value="100">Tidak Ada</option>
          <option value="80">0-20 butir/Kg</option>
          <option value="30">>20 butir/kg</option>
        </select>
      </div>
    </div>
  </div>
  <br>


  <div class="col-md-4"></div>
  <div class="row">
    <input type="submit" class="btn btn-primary btn-md" name="submit" value="Check" style="width:450px"></input>  
    {{ csrf_field() }}
  </div>

</form>




</div>


@endsection

