<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kualitas;
use App\Http\Controllers\Controller;
use session;
class tambah_kualitas extends Controller
{
	public function index(){
		$kualitas=kualitas::all();
		
		return view ('tambah_kualitas');	}
	public function check(Request $Request){
		$hama=$Request->cek_hama;
		$bau=$Request->cek_bau;
		$derajatSosoh=$Request->cek_derajat_sosoh;
		$kadarAir=$Request->cek_kadar_air;
		$butirUtuh=$Request->cek_butir_utuh;
		$butirPatah=$Request->cek_butir_patah;
		$butirMenir=$Request->cek_butir_menir;
		$butirHijau=$Request->cek_butir_hijau;
		$butirKuningRusak=$Request->cek_butir_kuning_rusak;
		$butirGabah=$Request->cek_butir_gabah;

	//menghitung kualitas
		$kualitas=$hama*0.1+$bau*0.1+$derajatSosoh*0.15+$kadarAir*0.05+$butirUtuh*0.15+$butirPatah*0.1+$butirMenir*0.1+$butirHijau*0.1+$butirKuningRusak*0.1+$butirGabah*0.05;
		//pembagian kualitas
		if($kualitas>=80){
			dd("grade A");
		}elseif($kualitas>=50&&$kualitas<80){
			dd("grade B");
		}else{
			dd("grade C");
		}
		
	}
		public function store(Request $request) {
		$kualitas = new kualitas;
		$kualitas->cekHama = $request->cek_hama;
		$kualitas->cekBau = $request->cek_bau;
		$kualitas->cekDerajatSosoh = $request->cek_derajat_sosoh;
		$kualitas->cekKadarAir = $request->cek_kadar_air;
		$kualitas->cekButirUtuh = $request->cek_butir_utuh;
		$kualitas->cekButirPatah = $request->cek_butir_patah;
		$kualitas->cekButirMenir = $request->cek_butir_menir;
		$kualitas->cekButirHijau = $request->cek_butir_hijau;
		$kualitas->cekButirKuningRusak = $request->cek_butir_kuning_rusak;
		$kualitas->cekButirGabah = $request->cek_butir_gabah ;

		$kualitas-> save();

		return redirect('kualitas');

	}

	}
	
		
	
