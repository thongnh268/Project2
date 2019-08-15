<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('assets/css/pace.css')}}">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('assets/demo/favicon.png')}}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GALAXY CINEMA</title>
    <!-- CSS -->
  <link href="{{URL::asset('assets/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('assets/vendors/weather-icons-master/weather-icons.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('assets/vendors/weather-icons-master/weather-icons-wind.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('/css/filter.css')}}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->

   
</head>

<body class="sidebar-light sidebar-expand">
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="/" class="navbar-brand text-center">
                    <img class="logo-expand" alt="" src="{{URL::asset('assets/demo/logo-expand.png')}}">
                    <img class="logo-collapse" alt="" src="{{URL::asset('assets/demo/logo-collapse.png')}}">
                    <!-- <p>BookShop</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon">menu</i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            <form class="navbar-search hidden-xs-down" role="search" method="get" action=""><i class="material-icons list-icon">search</i> 
                <input type="text" class="search-query" name="key" placeholder="Tìm kiếm..."> <a href="javascript:void(0);" class="remove-focus"><i class="material-icons">clear</i></a>
            </form>
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            
            <!-- gio hang -->
            <ul class="nav navbar-nav hidden-sm-down">
             <li class="dropdown"><a href="#" class="dropdown-toggle ripple" data-toggle="dropdown">
                @guest
                @else
                
                 <li  class="dropdown"><a href="#" class="dropdown-toggle ripple" data-toggle="dropdown"> <i class="material-icons list-icon">account_box</i> </a>
                    <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                        <div class="card">
                            <header class="card-header">Xin chào: <b>{{Auth::user()->name}}</b>
                            </header>
                            <ul class="nav in side-menu">
                                @if (Auth::user() && Auth::user()->role == 1)
                                <li><a href="{{url('/admin_dashboard')}}"><i class="list-icon material-icons">settings</i> ADMIN PANEL</a>
                    </li>@endif
                    <li><a href="{{url('/profile')}}/{{Auth::user()->id}}"><i class="list-icon material-icons">face</i> Thông tin</a>
                    </li>
                    <li><a href="{{url('/user/update')}}/{{Auth::user()->id}}"><i class="list-icon material-icons">build</i>Cập nhật thông tin</a>
                    </li>
                    <li><a href="{{url('/user/order_manage')}}"><i class="list-icon material-icons">payment</i>Đơn hàng của bạn</a>
                    </li>
                <li><a href="logout"><i class="list-icon material-icons">settings_power</i> <span class="hide-menu">Đăng xuất</span></a>
                    </li></ul>
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card -->
                    </div>
                </li> @endguest
                <!-- Authentication Links -->
                 @guest
                     <li><a href="login">ĐĂNG NHẬP</a>
                        </li>
                     <li><a href="javascript:void(0);" class="right-sidebar-toggle ripple"></a>
                </li>
                 @else
               
                
                 @endguest
            </ul>
            
    </div>
    </li>
    </ul>
    <!-- /.navbar-right -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled clearfix">
 
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                   
                    <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">sort</i> <span class="hide-menu">Các thể loại phim</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="{{url('sort_min')}}">Hành Động</a>
                            </li>
                            <li><a href="{{url('sort_max')}}">Kinh Dị</a>
                            </li>
                            <li><a href="{{url('sort_az')}}">Viễn Tưởng</a>
                            </li>
                            <li><a href="{{url('sort_za')}}">Hoạt Hình</a>
                            </li>
                            <li><a href="{{url('sort_new')}}">Tình Cảm</a>
                            </li>
                            <li><a href="{{url('sort_old')}}">Tâm Lý</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">contacts</i> <span class="hide-menu">Liên hệ</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="http://fb.com">Facebook</a>
                            </li>
                            <li><a href="http://Gmail.com">Email</a>
                            </li>
                            <li><a href="#">Twitter</a>
                            </li>
                            <li><a href="#">Instagram</a>
                            </li>
                            <li><a href="https://Youtube.com">Youtube</a>
                            </li>
                        </ul>
                    </li>
                    <li ><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">business</i> <span class="hide-menu">Điều khoản</span></a>
                    </li>
                    <li class="list-divider"></li>
                    <li><a href="#" class="ripple"><i class="list-icon material-icons">help_outline</i> <span class="hide-menu">Hướng dẫn</span></a>
                    </li>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- script xoa gio hang -->
        
        <!-- /.site-sidebar -->
  <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/mediaelementplayer.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/metisMenu.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/perfect-scrollbar.jquery.js')}}"></script>
  <script src="{{URL::asset('assets/js/sweetalert2.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendors/charts/utils.js')}}"></script>
  <script src="{{URL::asset('assets/vendors/charts/excanvas.js')}}"></script>
  <script src="{{URL::asset('assets/vendors/theme-widgets/widgets.js')}}"></script>
  <script src="{{URL::asset('assets/js/theme.js')}}"></script>
  <script src="{{URL::asset('assets/js/custom.js')}}"></script>
        </body> </html>