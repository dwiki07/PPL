<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beras extends Model
{
    protected $table ='beras';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    
    public $timestamps=false; 
}
