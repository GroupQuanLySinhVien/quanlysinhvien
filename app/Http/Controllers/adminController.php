<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\admin;
class adminController extends Controller
{
    public function getlogin()
    {
    	return view('login.login');
    }
     public function postlogin(Request $request){
        $this->validate($request,[
            'email'=>'required|',
            'password'=>'required|min:5|max:30'
        ],[
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất là 5 kí tự',
            'password.max'=>'Mật khẩu không được vượi quá 30 kí tự'

        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember_me)) {
            return redirect('thongtin');
        }else{
               return redirect('login')->withInput($request->only('email', 'remember_me'));
        }
    
    }
    public function getthongtin()
    {
    	return view('admin.thongtin');
    }
}
