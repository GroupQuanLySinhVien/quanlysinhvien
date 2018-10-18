
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      @if(Auth::check()) 
      <div class="user-panel">
        <div class="pull-left image">
          <img src="tim_asset/image/{{Auth::user()->avata}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->fullname}}</p>
          <a href="liststudent"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      @endif
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU QUẢN LÝ</li>
        <li >
          <a href="#">
            <i class="  fa fa-info"></i> <span>Thông tin bản thân</span>
          </a>
        </li>
         <li  >
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Quản lý nhân viên</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="#"><i class="fa fa-circle-o"></i> Danh sách </a></li>
          </ul>
        </li>
        <li  <?php if ($action1=="Quản lý sinh viên") { echo 'class="treeview active"'; } ?>>
          <a href="liststudent">
            <i class="fa fa-users"></i>
            <span>Quản lý sinh viên</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($action=="Danh sách") { echo 'class="active"'; } ?>><a href="liststudent"><i class="fa fa-circle-o"></i> Danh sách </a></li>
          </ul>
        </li>
        <li  >
          <a href="#">
            <i class="fa fa-wpforms"></i>
            <span>Quản lý điểm danh</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="#"><i class="fa fa-circle-o"></i> Danh sách </a></li>
          </ul>
        </li>
        <li >
          <a href="#">
            <i class="  fa fa-slideshare"></i>
            <span>Quản lý lớp học</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="#"><i class="fa fa-circle-o"></i> Danh sách </a></li>
          </ul>
        </li>
        <li  >
          <a href="#">
            <i class="  fa fa-edit"></i>
            <span>Quản lý điểm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-wpforms"></i>
            <span>Quản lý phân công dậy</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="#"><i class="fa fa-circle-o"></i> Danh sách</a></li>   
            
          </ul>
        </li>
 

        <li>
          <a href="dangxuat">
            <i class="fa fa-sign-out"></i>
            <span>Đăng xuất</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
