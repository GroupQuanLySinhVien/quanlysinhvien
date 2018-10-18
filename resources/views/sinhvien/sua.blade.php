@extends('layout.index')

  @section('content')
 <?php $action="Sửa sinh viên"; ?>
  <?php $action1="Quản lý sinh viên"; ?>
  <?php $action2=""; ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sửa
        <small>sinh viên</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="list"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="liststudent"><?php echo $action1 ?></a></li>
        <li class="active"><?php echo $action ?></li>
        <li class="active"><?php echo $action2 ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
                         @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        @if(session('thongbao1'))
                            <div class="alert alert-info">
                                {{session('thongbao1')}}
                            </div>
                        @endif
            <!-- form start -->
            
            <form action="editstudent/{{$student->id}}" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Mã sinh viên</label>
                                <input class="form-control " name="masv" value="{{$student->masv}}" placeholder="Nhập mã sinh viên" />
                            </div>
                            <div class="form-group">
                                <label>Tên sinh viên</label>
                                <input class="form-control" name="name" placeholder="Nhập tên sinh viên" value="{{$student->tensv}}" />
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Nhập email" value="{{$student->email}}" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="changePassword" id="changePassword">
                                <label>Đổi mật khẩu</label>
                            </div>
                             <div class="form-group">
                                <label>Nhập mật khẩu mới</label>
                                <input type="password" class="form-control password" id="pass" name="password"  disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control password" id="passa" name="passAgain" disabled="" />
                            </div>
                            
                            <div class="form-group">
                                <label>Giới tính: </label>
                                <input  type="radio" name="gender" value="0" <?php if($student->gioitinh==0) echo "checked"; ?> /> Nam   
                                <input  type="radio" name="gender" value="1"  <?php if($student->gioitinh==1) echo "checked"; ?>/> Nữ  
                            </div>
                             <div class="form-group">
                                <label>Ngày sinh</label>
                                  <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control" value="{{$student->ngaysinh}}" name="date" placeholder="yyyy/mm/dd">
                             </div>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" value="{{$student->diachi}}"/>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{$student->sdt}}"/>
                            </div>
                            <img src="tim_asset/image/{{$student->avata}}" alt="{{$student->avata}}">
                            <div class="form-group">
                                <label>Avata</label>
                                <input type="file" name="image">
                            </div>
                              
              </div>
              <!-- /.box-body -->

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Sửa sinh viên</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          

        

        </div>
        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

 @endsection
 @section('js')
    <script type="text/javascript">
      $("#changePassword").change(function(){
          if($(this).is(':checked')){
            $(".password").removeAttr('disabled');
            $("#pass").attr('placeholder','Nhập mật khẩu mới');
            $("#passa").attr('placeholder','Nhập lại mật khẩu');
          }
          else{
            $(".password").attr('disabled','');
            $("#pass").removeAttr('placeholder','');
            $("#passa").removeAttr('placeholder','');
          }
      });
    </script>

 @endsection
