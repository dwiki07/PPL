<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gabah extends Model
{
    protected $table ='gudangs';
    protected $primaryKey = 'id';
    protected $guarded = ['id','created_at', 'update_at'];
    
    public $timestamps=false; 

    public function scopeGabah($query){
    	return $query->join('suppliers', 'suppliers.id', '=', 'gudangs.idSupplier')
        ->select('namaSupplier','gudangs.*')
        ->whereNull('tanggalPenggilingan');
    }

}
