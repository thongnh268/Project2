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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style> form {
    display: inline-block;
} </style> 
    <!-- Head Libs -->

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
   
</head>
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Bảng điều khiển ADMIN</h5>
                    <p class="mr-0 text-muted hidden-sm-down"> Ngày: {{ date('d - m - Y ,  H:i:s') }}</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a>
                        </li>
                       
                    </ol>
                    
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                
                </div>
                <!---- bang data --->
                <div class="row">
                    <div class="col-md-9 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Thêm giờ chiếu</h5> 
                                @if($errors->any())
            <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button> <i class="material-icons list-icon">check_circle</i>  <strong>Thêm gio chieu thành công !!</strong> </div>
            @endif<center>
                         <form method="POST" action="/taogiochieu" id="cat1">
      {{ csrf_field() }}
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="password">Chon phim:</label>
           <div class="col-md-9"> <select class="form-control" name="movie_id" form="cat1">
            @foreach($mov as $m)
             <option value="{{$m->id}}">{{$m->moviename}}</option>
             @endforeach
           </select>
        </div></div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="password">Chon khung gio:</label>
           <div class="col-md-9"> <input type="time" class="form-control" id="nxb" name="times">
        </div></div>
         <div class="form-group row">

            <button style="cursor:pointer" type="submit" class="btn btn-primary btn-rounded">Xác nhận</button>
                   </form> <div class="col-md-4"> </div> @foreach($sc as $s)
                   {{$s->id}}
                   <br>
                   {{$s->movie_id}}<br>
                   {{$s->sreening_star}}

                   @endforeach
        </div></center>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-3 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Bảng điều hướng</h5>
                                
                                <ul class="nav in side-menu">
                                    <li><a href="{{url('/userlist')}}"><i class="list-icon material-icons">perm_identity</i> Quản Lý Người Dùng</a>
                    </li>
                    <li><a href="{{url('/booklist')}}"><i class="list-icon material-icons">description</i> Quản Lý Phim</a>
                    </li>
                    <li><a href="{{url('/addcat')}}"><i class="list-icon material-icons">list</i> Quản Lý Nhân Viên</a>
                    </li>
                    <li><a href="{{url('/import')}}"><i class="list-icon material-icons">account_balance</i> Quản Lý Kho</a>
                    </li>
                    <li><a href="{{url('/admin/order_manage')}}"><i class="list-icon material-icons">euro_symbol</i> Quản Lý Đơn Hàng</a>
                    </li>
                    <li><a href="{{url('/profile')}}"><i class="list-icon material-icons">account_box</i> Thông Tin Cá Nhân
                    </li></a>
                                </ul>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div> 
                <!-- /.row -->
          
                    
        </main>
        
        
   
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