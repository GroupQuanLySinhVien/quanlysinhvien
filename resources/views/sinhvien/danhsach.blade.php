@extends('layout.index')

@section('content')
<?php $action="Danh sách"; ?>
<?php $action1="Quản lý sinh viên"; ?>
<?php $action2=""; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $action ?>
        <small>sinh viên</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="list"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="liststudent"><?php echo $action1 ?></a></li>
        <li class="active">Danh sách</li>
        <li class="active"><?php echo $action2 ?></li>
      </ol>
    </section>
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
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
              <a href="addstudent"><button type="button" class="btn btn-success pull-right">Thêm sinh viên</button></a>
            <!-- /.box-header -->
              </div>
            <div class="box-body">
             
          
              <table class="table table-striped table-bordered table-hover" id="dataTables-example"> 
                <thead>
                            <tr align="center">
                                <th>No</th>
                                <th width="80px">Avata</th>
                                <th>Mã sinh viên</th>
                                <th>Tên sinh viên</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>SĐT</th>
                                <th width="50px"></th>
                                <th width="50px"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                          <?php $count=1; ?>
                          @foreach($student as $item)
                            <tr class="odd gradeX" align="center">
                              <td>{{$count++}}</td>
                              <td><img src="tim_asset/image/{{$item->avata}}" alt="{{$item->avata}}" style="max-height: 60px;max-width: 60px;"></td>  
                              <td>{{$item->masv}}</td>   
                               <td>{{$item->tensv}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->diachi}}</td>
                                <td>{{$item->sdt}}</td>
                                
                                 <td class="center"><a style="font-weight: bold;" href="editstudent/{{$item->id}}"><button class="btn btn-warning">Sửa</button></a></td>
                                <td class="center"><button class="btn btn-danger" data-catid={{$item->id}} data-toggle="modal" data-target="#delete">Xóa</button></td>
                               
                            </tr>

                          @endforeach
                            
                            
                        </tbody>
              </table>
                    
          
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
   <div class="modal modal-info fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Xác nhận xóa</h4>
      </div>
      <form action="deletesinhvien" method="post">
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Bạn có chắc chắn muốn xóa?
        </p>
            <input type="hidden" name="id" id="cat_id" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
          <button type="submit" class="btn btn-warning">Yes, Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>

  @endsection
