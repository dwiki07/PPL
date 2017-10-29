<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kualitas extends Model
{
    protected $table ='kualitas';
    protected $guarded = ['id_kualitas','created_at', 'update_at'];
    public $timestamps=false; 
}
