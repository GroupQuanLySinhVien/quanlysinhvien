@extends('admin.layout.index')

  @section('content')
 <?php $action="Sửa"; ?>
  <?php $action1="Quản lý người lái"; ?>
  <?php $action2=""; ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sửa
        <small>chuyến</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="owner/list"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="owner/list"><?php echo $action1 ?></a></li>
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
            <div class="box-header with-border">
              <h3 class="box-title">Edit</h3>
            </div>
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
                            <div class="alert alert-success">
                                {{session('thongbao1')}}
                            </div>
                        @endif
            <!-- form start -->
            <form action="owner/edit/{{$owner->id}}" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                               
                            
                            <div class="form-group">
                                <label> Tên người lái</label>
                                <input class="form-control" name="name" placeholder="Nhập tên người lái" value="{{$owner->name}}" />
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Nhập Email" value="{{$owner->email}}"/>
                            </div>
                             <div class="form-group">
                                <input type="checkbox" name="changePassword" id="changePassword">
                                <label>Change password</label>
                                <input type="password" class="form-control password" name="pass" placeholder="Please Enter password" disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Confirm Your Password</label>
                                <input type="password" class="form-control password" name="passAgain" placeholder="please Confirm Your Password" disabled="" />
                            </div>
                             <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{$owner->phone}}"/>
                            </div>
                              
              </div>
              <!-- /.box-body -->

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Sửa</button>
                <button type="reset" class="btn btn-info">Reset</button>
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
 @section('script')
    <script>
        $(document).ready(function(){
            $("#changePassword").change(function(){
                if($(this).is(":checked")){
                    $(".password").removeAttr('disabled');
                }else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection