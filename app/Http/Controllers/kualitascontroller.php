<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kualitas;
use App\Http\Controllers\Controller;
use session;
class kualitascontroller extends Controller
{
	public function index(){
		$kualitas=kualitas::all();
		
		return view ('kualitas/show', ['kualitas' => $kualitas]);	}

		
	public function check(Request $Request){

		$hama 					=$Request->cek_hama;
		$bau 					=$Request->cek_bau;
		$derajatSosoh 			=$Request->cek_derajat_sosoh;
		$kadarAir 				=$Request->cek_kadar_air;
		$butirUtuh 				=$Request->cek_butir_utuh;
		$butirPatah 			=$Request->cek_butir_patah;
		$butirMenir 			=$Request->cek_butir_menir;
		$butirHijau 			=$Request->cek_butir_hijau;
		$butirKuningRusak		=$Request->cek_butir_kuning_rusak;
		$butirGabah 			=$Request->cek_butir_gabah;

	//menghitung kualitas
		$kualitas=$hama*0.1+$bau*0.1+$derajatSosoh*0.15+$kadarAir*0.05+$butirUtuh*0.15+$butirPatah*0.1+$butirMenir*0.1+$butirHijau*0.1+$butirKuningRusak*0.1+$butirGabah*0.05;
		//pembagian kualitas
		if($kualitas>=80){
			$hasilKualitas = "A";
		}elseif($kualitas>=50&&$kualitas<80){
			$hasilKualitas = "B";
		}else{
			$hasilKualitas = "C";
		}
		
		$kualitas = new kualitas;
		$kualitas->cekHama 				= $Request->cek_hama;
		$kualitas->cekBau 				= $Request->cek_bau;
		$kualitas->cekDerajatSosoh 		= $Request->cek_derajat_sosoh;
		$kualitas->cekKadarAir 			= $Request->cek_kadar_air;
		$kualitas->cekButirUtuh 		= $Request->cek_butir_utuh;
		$kualitas->cekButirPatah 		= $Request->cek_butir_patah;
		$kualitas->cekButirMenir 		= $Request->cek_butir_menir;
		$kualitas->cekButirHijau 		= $Request->cek_butir_hijau;
		$kualitas->cekButirKuningRusak 	= $Request->cek_butir_kuning_rusak;
		$kualitas->cekButirGabah 		= $Request->cek_butir_gabah ;
		 $kualitas->kualitas 			= $hasilKualitas;
		 $kualitas-> save();
		 
		return redirect('kualitas');
		
	}
		public function store(Request $request) {
		

		return redirect('kualitas');

	}
		public function create(){
		return view('kualitas/create');		
		}

	}
	
		
	
