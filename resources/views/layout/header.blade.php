 <header class="main-header">
    <!-- Logo -->
    <a href="liststudent" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>F</b>PT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Trang</b> Quản Trị</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
  
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
             @if(Auth::check())
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="tim_asset/image/php108e.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->fullname}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="tim_asset/image/{{Auth::user()->avata}}" class="img-circle" alt="User Image">

                <p>
                        {{Auth::user()->fullname}}
                  <small><?php
                  date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $dt = new DateTime();
                    echo $dt->format('d-m-Y H:i');
                      ?></small>
                </p>
              </li>
@endif
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <a href="#" class="btn btn-info btn-flat  fa fa-gears"> Setting</a>
                </div>
                <div class="pull-right">
                  <a href="dangxuat" class="btn btn-warning btn-flat   fa fa-sign-out">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>