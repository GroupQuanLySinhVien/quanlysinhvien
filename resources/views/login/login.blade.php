@extends('login.layout.index')
@section('content')
                    
<div class="login-box">
                   @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        @if(session('thongbao'))
                            <div class="alert alert-info">
                                {{session('thongbao')}}
                            </div>
                        @endif
  <div class="login-logo">
    <h3 style="font-family: 'Abril+Fatface';font-style: italic;"><b>Welcome to the login page</b></h3>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p style="font-weight: bold;font-size: 14pt;font-family: 'Abril+Fatface';" class="text-left">Please login</p>

    <form action="dangnhap" method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember_me">&nbsp;&nbsp;Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button style="font-family: 'Abril+Fatface'" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection