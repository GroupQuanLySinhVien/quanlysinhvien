<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sinhvien;
class sinhvienController extends Controller
{
    public function __construct() {
        $this->middleware('adminLogin');
    }
    public function liststudent()
    {
    	$student=sinhvien::all();
    	return view('sinhvien.danhsach')->with(['student'=>$student]);
    }
     public function addstudent()
    {
    	return view('sinhvien.them');
    }
    public function poststudent(Request $request){
    	 $this->validate($request,[
    	 	'masv'=>'required',
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'passAgain'=>'required|same:password',
            'date'=>'required',
            'address'=>'required',
            'phone'=>'required'
        ]
        ,[
            'name.required'=>'Bạn chưa nhập tên sinh viên',
            'masv.required'=>'Bạn chưa nhập mã sinh viên',
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'passAgain.required'=>'Bạn chưa nhập lại mật khẩu',
            'passAgain.same'=>'Mật khẩu nhập lại chưa khớp',
            'date.required'=>'Bạn chưa nhập ngày sinh',
            'address.required'=>'Bạn chưa nhập địa chỉ',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
        ]);
         $student = new sinhvien();
         $student->masv = $request->masv;
         $student->tensv = $request->name;
         $student->gioitinh = $request->gender;
         $student->email = $request->email;
         $student->password = bcrypt($request->password);
         $student->ngaysinh = $request->date;
         $student->diachi = $request->address;
         $student->sdt = $request->phone;
         $file = $request->file('image');
        $duoi = $file -> getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi != 'JPG' && $duoi !='png' &&$duoi !='PNG' && $duoi!='jpeg' && $duoi !='JPEG'){
            return redirect('addstudent')->with('thongbao1','Bạn chỉ được chọn file có đuôi jpg,JPG,png,PNG,jpeg,JPEG');
        }

        $name = $file -> getClientOriginalName();
        $Hinh = str_random(4)."_".$name;
        while (file_exists("tim_asset/image/".$Hinh)) {
             $Hinh = str_random(4)."_".$name;
        }
        $file->move("tim_asset/image",$Hinh);
        $student->avata=$Hinh;
        $student->save();
        return redirect('addstudent')->with('thongbao','Thêm sinh viên thành công');
        
    }
     public function geditstudent($id)
    {
    	$student=sinhvien::find($id);
    	return view('sinhvien.sua')->with(['student'=>$student]);
    }
    public function peditstudent(Request $request,$id){
    	 $this->validate($request,[
    	 	'masv'=>'required',
            'name'=>'required',
            'email'=>'required',
            'date'=>'required',
            'address'=>'required',
            'phone'=>'required'
        ]
        ,[
            'name.required'=>'Bạn chưa nhập tên sinh viên',
            'masv.required'=>'Bạn chưa nhập mã sinh viên',
            'email.required'=>'Bạn chưa nhập email',
            'date.required'=>'Bạn chưa nhập ngày sinh',
            'address.required'=>'Bạn chưa nhập địa chỉ',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
        ]);
    	 $student=sinhvien::find($id);
         $student->masv = $request->masv;
         $student->tensv = $request->name;
         $student->gioitinh = $request->gender;
         $student->email = $request->email;
         if($request->changePassword=='on'){
         $this->validate($request,[
            'pass' => 'required|min:5',
            'passAgain' => 'required|same:pass',

        ],
        [
            'pass.required' => 'Bạn chưa nhập mật khẩu',
            'pass.min'=>'Mật khẩu phải lớn hơn 5 kí tự',
            'passAgain.required'=>'Bạn chưa xác nhận mật khẩu',
            'passAgain.same'=>'Mật khẩu nhập lại chưa khớp', 
        ]);
            $student->password=bcrypt($request->password);
        }
         $student->ngaysinh = $request->date;
         $student->diachi = $request->address;
         $student->sdt = $request->phone;
        if($request->hasFile('image'))
    {
        $file = $request->file('image');
        $duoi = $file -> getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi != 'JPG' && $duoi !='png' &&$duoi !='PNG' && $duoi!='jpeg' && $duoi !='JPEG'){
            return redirect('editstudent')->with('thongbao1','Bạn chỉ được chọn file có đuôi jpg,JPG,png,PNG,jpeg,JPEG');
        }
        $name = $file -> getClientOriginalName();
        $Hinh = str_random(4)."_".$name;
        while (file_exists("tim_asset/image/".$Hinh)) {
             $Hinh = str_random(4)."_".$name;
        }
        $file->move("tim_asset/image",$Hinh);
         unlink("tim_asset/image/".$bus->image);
        $student->image=$Hinh;
    }
         $student->save();
        return redirect('editstudent/'.$id)->with('thongbao','Sửa sinh viên thành công');
        
    }
    public function xoasinhvien(Request $request){
    	 $student = sinhvien::findOrFail($request->id);
    	$student->delete();
    	return redirect('liststudent')->with('thongbao','Xóa thành công');
    }
    
}
