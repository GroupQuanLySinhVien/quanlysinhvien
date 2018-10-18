<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sinhvien;
class sinhvienController extends Controller
{
    public function liststudent()
    {
    	$student=sinhvien::all();
    	return view('sinhvien.danhsach')->with(['student'=>$student]);
    }
}
