
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quản trị viên</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <base href="{{asset('')}}">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="admin_config/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin_config/bower_components/font-awesome/css/font-awesome.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin_config/bower_components/Ionicons/css/ionicons.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_config/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="admin_config/dist/css/skins/_all-skins.min.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">  
   <link href="admin_config/bower_components1/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="admin_config/dist/css/mystyle.css">
  
  @yield('style')
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini" style="font-family: 'Roboto', sans-serif;">
<!-- Site wrapper -->
<div class="wrapper">

  @include('layout.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
    @include('layout.menu')

  <!-- =============================================== -->
      @yield('content')





  

      <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Quản lý sinh viên </b> Đại Học FPT 
          </div>
          <strong>Copyright &copy; 10-2018 <a href="https://www.facebook.com/">Group PHP1807E</a>.</strong> FPT Aptech
        </footer>  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="admin_config/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="admin_config/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="admin_config/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- SlimScroll -->
<script src="admin_config/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="admin_config/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin_config/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin_config/bower_components/moment/moment.js"></script>
<script src="admin_config/dist/js/demo.js"></script>
<!-- datetime picker -->

<script src="admin_config/bower_components1/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="tim_asset/js/main.js"></script>
    <script src="admin_config/bower_components1/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <script type="text/javascript">
    $('#delete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 

      var cat_id = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #cat_id').val(cat_id);
})
  </script>

    @yield('js')
</body>
</html>
