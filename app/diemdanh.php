<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diemdanh extends Model
{
    protected $table="diemdanh";
     public function sinhvien()
    {
    	return $this->belongsTo('App/sinhvien','sinhvien_id','id');
    }


     public function phancong()
    {
    	return $this->belongsTo('App/phancong','phancong_id','id');
    }
}
