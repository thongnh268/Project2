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
                                <h5 class="box-title">Thêm phim mới</h5> 
                                @if($errors->any())
            <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button> <i class="material-icons list-icon">check_circle</i>  <strong>Thêm phim thành công !!</strong> </div>
            @endif<center>
                         <form method="POST" action="/taophim" id="cat" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="name">Tên Phim</label>
            <div class="col-md-9">
            <input type="text" class="form-control" id="name" name="moviename">
        </div></div>
            <input type="hidden" class="form-control"  name="bookID">
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="email">Đạo Diễn:</label>
            <div class="col-md-9">
            <input type="text" class="form-control" id="email" name="director">
        </div></div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="email">Diễn Viên:</label>
            <div class="col-md-9">
           <input type="text" class="form-control" id="email" name="cast">
        </div> </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label" for="l15">Thông tin chi tiết, mô tả:</label>
          <div class="col-md-9">
          <textarea class="form-control" id="l15" rows="3" name="description"></textarea>
            </div>
     </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="password">Thể Loại:</label>
           <div class="col-md-9"> <select class="form-control" name="type" form="cat">
             <option value="hanh ding">hah dong </option>
             <option value=""> ten the loại </option>
             <option value=""> ten the loại </option>
             <option value=""> ten the loại </option>
             <option value=""> ten the loại </option>
             <option value=""> ten the loại </option>
           </select>
        </div></div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="password">Thời Lượng:</label>
           <div class="col-md-9"> <input type="text" class="form-control" id="nxb" name="duration_min">
        </div></div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label" for="password">Ngôn Ngữ:</label>
           <div class="col-md-9"> <input type="text" class="form-control" id="nxb" name="language">
        </div></div>
    <div class="form-group row">
            <label class="col-md-3 col-form-label" for="password">Ngày Khởi Chiếu:</label>
            <div class="col-md-9"><input type="date" class="form-control" id="datepicker" name="opening_date">
        </div></div>
 <div class="form-group row">
    <label class="col-md-3 col-form-label" for="l16">Hình ảnh</label>
              <div class="col-md-9">
                  <input id="l16" type="file" name="image">
                  <br><small class="text-muted">Hình ảnh 600x400 pixel</small>
                                        </div>
                                    </div> <div class="form-group row">

            <button style="cursor:pointer" type="submit" class="btn btn-primary btn-rounded">Xác nhận</button>
                   </form> <div class="col-md-4"> <form action="/" method="get">
                        <button class="btn btn-outline-default btn-rounded" type="submit">Huỷ bỏ</button>
                        </form></div>
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