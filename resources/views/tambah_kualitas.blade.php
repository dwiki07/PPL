@extends('layouts.master')

@section('content')
<h2>syalala</h2>
      <H3 align="center">CEK KUALITAS</H3>
      <div class="container-fluid xyz">
        <form method="post" class="form-tambah" action="{{ url ('kualitas/check')}}">
          {{csrf_field()}}
        <div class="row">
          <div class="col-md-3">
            <label for="Supplier">Nama Supplier</label>
          </div>
          <div class="col-md-3">
            <div class="input-field col s6 ">
              <select id="Supplier" name="cek_warna" class="required" required="">
                <option value="">----Pilih----</option>
                <option value="1">Dwiki</option>
                <option value="2">Aditya</option>
                <option value="3">Indarto</option>
                <option value="4">Ganteng</option>
              </select>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <label for="Hama">Cek Hama</label>
          </div>
          <div class="col-md-6">
            <div class="input-field col s6    ">
              <select id="cek_hama" name="cek_hama" class="required" required="">
                <option value="">- Pilih -</option>
                <option value="100">Tidak Ada</option>
                <option value="50">Ada</option>
              </select>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <label for="Bau">Cek Bau Busuk/Asam</label>
          </div>
          <div class="col-md-6">
            <div class="input-field col s6    ">
              <select id="cek_bau" name="cek_bau" class="required" required="">
                <option value="">- Pilih -</option>
                <option value="100">Tidak Ada</option>
                <option value="50">Ada</option>
              </select>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <label for="Derajat">Cek Derajat Sosoh</label>
          </div>
          <div class="col-md-6">
            <div class="input-field col s6    ">
              <select id="cek_derajat_sosoh" name="cek_derajat_sosoh" class="required" required="">
                <option value="">- Pilih -</option>
                <option value="100">96%-100%</option>
                <option value="80">90%-95%</option>
                <option value="30">< 90%</option>
              </select>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <label for="Air">Cek Kadar Air</label>
          </div>
          <div class="col-md-6">
           <div class="input-field col s6    ">
            <select id="cek_kadar_air" name="cek_kadar_air" class="required" required="">
              <option value="">- Pilih -</option>
              <option value="100">< 10%</option>
              <option value="80">11%-15%</option>
              <option value="30">> 15%</option>
            </select>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <label for="Utuh">Cek Butir Utuh</label>
        </div>
        <div class="col-md-6">
          <div class="input-field col s6    ">
            <select id="cek_butir_utuh" name="cek_butir_utuh" class="required" required="">
              <option value="">- Pilih -</option>
              <option value="100">< 40%</option>
              <option value="80">35-40%</option>
              <option value="30">< 35%</option>
            </select>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <label for="Patah">Cek Butir Patah</label>
        </div>
        <div class="col-md-6">
          <div class="input-field col s6    ">
            <select id="cek_butir_patah" name="cek_butir_patah" class="required" required="">
              <option value="">- Pilih -</option>
              <option value="100">< 10%</option>
              <option value="80">10%-20%</option>
              <option value="30">> 20%</option>
            </select>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <label for="Patah">Cek Butir Menir</label>
        </div>
        <div class="col-md-6">
          <div class="input-field col s6    ">
            <select id="cek_butir_menir" name="cek_butir_menir" class="required" required="">
              <option value="">- Pilih -</option>
              <option value="100">0%</option>
              <option value="80">1%-3%</option>
              <option value="30">> 3%</option>
            </select>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <label for="Patah">Cek Butir Hijau</label>
        </div>
        <div class="col-md-6">
          <div class="input-field col s6    ">
            <select id="cek_butir_hijau" name="cek_butir_hijau" class="required" required="">
              <option value="">- Pilih -</option>
              <option value="100">Tidak Ada</option>
              <option value="50">Ada</option>
            </select>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <label for="Patah">Cek Butir Kuning/Rusak</label>
        </div>
        <div class="col-md-6">
          <div class="input-field col s6    ">
            <select id="cek_butir_kuning_rusak" name="cek_butir_kuning_rusak" class="required" required="">
              <option value="">- Pilih -</option>
              <option value="100">Tidak Ada</option>
              <option value="50">Ada</option>
            </select>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <label for="Patah">Cek Butir Gabah</label>
        </div>
        <div class="col-md-6">
          <div class="input-field col s6    ">
            <select id="cek_butir_gabah" name="cek_butir_gabah" class="required" required="">
              <option value="">- Pilih -</option>
              <option value="100">Tidak Ada</option>
              <option value="80">0-20 butir/Kg</option>
              <option value="30">>20 butir/kg</option>
            </select>
          </div>
        </div>
      </div>
      <hr>
      <div class="col-sm-3">
      </div>
      <input type="submit" class="btn btn-primary btn-md" value="simpan"></input>  
    </div>
  </div>
@endsection