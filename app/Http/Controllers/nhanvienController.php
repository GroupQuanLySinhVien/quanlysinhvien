<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class nhanvienController extends Controller
{
    public function __construct() {
		$this->middleware('auth');
	}
}
