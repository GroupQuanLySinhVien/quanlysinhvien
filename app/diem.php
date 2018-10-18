<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diem extends Model
{
    protected $table ="diem";
    public function sinhvien()
    {
    	return $this->hasMany('App/sinhvien','sinhvien_id','id');
    }
    public function monhoc(){
    	return $this->belongsTo('App/monhoc','monhoc_id','id');
    }
}
