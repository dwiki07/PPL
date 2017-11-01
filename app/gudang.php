<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gudang extends Model
{
    protected $table ='gudangs';

    protected $guarded = ['id_gabah','created_at', 'update_at'];
    
    public $timestamps=false; 
}
