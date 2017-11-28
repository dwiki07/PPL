<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beras extends Model
{
    protected $table ='beras';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps=false; 
    public function scopeBeras($query){
    	return $query->join('gudangs', 'gudangs.id', '=', 'beras.idGabah')
    	->join('kualitas','kualitas.idGabah','=','gudangs.id')
        ->select('kualitas','beras.*');
    }
}
