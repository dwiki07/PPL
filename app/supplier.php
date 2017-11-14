<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table ='suppliers';
    protected $primaryKey = 'id';
    protected $guarded = ['id','created_at', 'update_at'];
    
    public $timestamps=false; 
}
