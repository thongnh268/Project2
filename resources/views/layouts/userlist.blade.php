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
    <title>Quản Lý Người Dùng</title>
    <!-- CSS -->
  <link href="{{URL::asset('assets/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('assets/vendors/weather-icons-master/weather-icons.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('assets/vendors/weather-icons-master/weather-icons-wind.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('/css/filter.css')}}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
<style> form {
    display: inline-block;
} </style> <!--- khong xuong dong form---->

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
                        <li class="breadcrumb-item"><a href="{{url('admin_dashboard')}}">Quay lại</a>
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
                <!-- Chart and Map Widget -->
                <div class="row">

                </div>
                <!-- /.row -->
                <!-- Contact, Pricing and Table Widgets -->
                <div class="row">
                    <div class="col-md-9 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Quản lý người dùng</h5>
                                @if($errors->any())
            <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button> <i class="material-icons list-icon">check_circle</i>  <strong>Xoá thành công !!</strong> </div>
            @endif

                               <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên người dùng</th>
                                            <th>Email</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>@foreach ($user1 as $users)
                                        <tr>
                                            <td>{{$users -> id}}</td>
                                            <td>{{$users -> name}}</td>
                                            <td>{{$users -> email}}</td>
                                            <td>

                                              <!--- set Admin-->
<script>
function do_check()
{
    var return_value=prompt("Nhập mật khẩu ADMIN tối cao nào:");
    if(return_value==="qqqqqq")
        return true;
    else
        return false;

}
</script>
                        <form method="POST" action="{{ route('phanquyen', [$users->id]) }}" onsubmit="return do_check();">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="role" value="2" />
                            <button type="submit" class="btn btn-danger">
                                Set Manager
                            </button>
                        </form>
                        <!--- xoa nguoi fung -->
                       <form method="POST" action="{{ route('userdelete', [$users->id]) }}" onsubmit="return do_check();">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">
                                Xoá
                            </button>
                        </form>
                        <!---- cap quyen nguwoi dung -->


                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
                                    <li><a href="/userlist"><i class="list-icon material-icons">perm_identity</i> Quản Lý Người Dùng</a>
                    </li>
                    <li><a href="{{url('/booklist')}}"><i class="list-icon material-icons">description</i> Quản Lý Sách</a>
                    </li>
                    <li><a href="{{url('/addcat')}}"><i class="list-icon material-icons">list</i> Quản Lý Thể Loại</a>
                    </li>
                    <li><a href="{{url('/import')}}"><i class="list-icon material-icons">account_balance</i> Quản Lý Kho</a>
                    </li>
                    <li><a href="{{url('/admin/order_manage')}}"><i class="list-icon material-icons">euro_symbol</i> Quản Lý Đơn Hàng</a>
                    </li>
                    <li><a href="{{url('/')}}"><i class="list-icon material-icons">home</i> Về Trang Chủ
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
