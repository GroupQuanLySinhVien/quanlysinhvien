@extends('admin.layout.index')

  @section('content')
 <?php $action="Thêm"; ?>
  <?php $action1="Quản lý người lái"; ?>
  <?php $action2=""; ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm
        <small>người lái</small>
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
              <h3 class="box-title">Thêm</h3>
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
            <form action="owner/add" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            
                            <div class="form-group">
                                <label>Tên người lái</label>
                                <input class="form-control" name="name" placeholder="Nhập tên người lái" />
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Nhập email"/>
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input class="form-control" type="password" name="passAgain" placeholder="Nhập lại mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="phone" placeholder="Nhập số điện thoại"/>
                            </div>
                              
              </div>
              <!-- /.box-body -->

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Thêm người lái</button>
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