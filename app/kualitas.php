<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kualitas extends Model
{
    protected $table ='kualitas';
    protected $guarded = ['id_gabah','created_at', 'update_at'];
    
    public function scopeKualitas($query){
    	return $query->join('gudangs', 'gudangs.id', '=', 'kualitas.idGabah')
    	->join('suppliers','suppliers.id','=','gudangs.idSupplier')
        ->select('namaSupplier','kualitas.*');
    }
}
