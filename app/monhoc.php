<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monhoc extends Model
{
    protected $table="monhoc";
    public function phancong()
    {
    	return $this->hasOne('App/phancong','monhoc_id','id');	
    }
     public function diem()
    {
    	return $this->hasOne('App/diem','diem_id','id');	
    }
}
