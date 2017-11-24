<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kualitas extends Model
{
    protected $table ='kualitas';
    protected $guarded = ['id_gabah','created_at', 'update_at'];
    
}
