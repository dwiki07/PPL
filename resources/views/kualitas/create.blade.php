@extends('layouts.app')

@section('content')
<div class="panel panel-primary" style="width: 630px;border-color: lightblue;margin-left: 400px">
<H3 align="center">CEK KUALITAS</H3>
<div class="container">
  <form method="post" class="form-tambah" action="{{ url ('kualitas/check')}}">
    <div class="col-md-1"></div>
    <div class="row">
      <div class="col-md-2">
        <label for="Hama">Id Gabah</label>
      </div>
      <div class="col-md-1">
        <div class="col-md-6">
          <input type="text" name="gabah2" id="gabah2" value="{{$id}}" disabled="" class="btn disabled" style="width: 200px" />
          <input type="hidden" name="gabah" id="gabah" value="{{$id}}"  />
        </div>
      </div>
    </div>
    <br>
    <div class="col-md-1"></div>
    <div class="row">
    <div class="col-md-2">
    <label>Jumlah Beras</label></div>
    <div class="col-md-1">
      <div class="col-md-6">
    <input type="number" name="jumlahBeras" class="required" required="" style="width: 200px">
    </div>
  </div>
    </div> <br>
    <div class="col-md-1"></div>
    <div class="row">
      <div class="col-md-2">
        <label for="Hama">Cek Hama</label>
      </div>
      <div class="col-md-1">
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
    <div class="col-md-1"></div>
    <div class="row">
      <div class="col-md-2">
        <label for="Bau">Cek Bau Busuk/Asam</label>
      </div>
      <div class="col-md-1">
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
    <div class="col-md-1"></div>
    <div class="row">
      <div class="col-md-2">
        <label for="Derajat">Cek Derajat Sosoh</label>
      </div>
      <div class="col-md-1">
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
    <div class="col-md-1"></div>
    <div class="row">
      <div class="col-md-2">
        <label for="Air">Cek Kadar Air</label>
      </div>
      <div class="col-md-1">
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
  <div class="col-md-1"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Utuh">Cek Butir Utuh</label>
    </div>
    <div class="col-md-1">
      <div class="input-field col-md-6    ">
        <select id="cek_butir_utuh" name="cek_butir_utuh" class="required" required="" style="width:200px">
          <option value="">- Pilih -</option>
          <option value="100">< 10%</option>
          <option value="80">35-10%</option>
          <option value="30">< 35%</option>
        </select>
      </div>
    </div>
  </div>
  <br>
  <div class="col-md-1"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Patah">Cek Butir Patah</label>
    </div>
    <div class="col-md-1">
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
  <div class="col-md-1"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Patah">Cek Butir Menir</label>
    </div>
    <div class="col-md-1">
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
  <div class="col-md-1"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Patah">Cek Butir Hijau</label>
    </div>
    <div class="col-md-1">
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
  <div class="col-md-1"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Patah">Cek Butir Kuning/Rusak</label>
    </div>
    <div class="col-md-1">
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
  <div class="col-md-1"></div>
  <div class="row">
    <div class="col-md-2">
      <label for="Patah">Cek Butir Gabah</label>
    </div>
    <div class="col-md-1">
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


  <div class="col-md-1"></div>
  
     <a type="submit" class="btn btn-warning btn-md" name="submit" value="Check" style="width:217px" href="/gudang">Cancel</a>  
    <input type="submit" class="btn btn-primary btn-md" name="submit" value="Check" style="width:217px"></input>
    <br><br>
    {{ csrf_field() }}
</form>    

</div>
</div>


@endsection
