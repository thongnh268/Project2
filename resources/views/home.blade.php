@include('header')


<main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Thông báo</h5>
                    <p class="mr-0 text-muted hidden-sm-down">{{ date('d - m - Y ,  H:i:s') }}</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">Danh Mục Phim</li>
                    </ol>
                    
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-đaue -->
            <!-- =================================== -->
        
            <!-- =================================== -->

            <div class="widget-list">
                <!-- cho de thong bao -->
                <div class="row">
                    <div class="col-lg-3 col-sm-6 widget-holder">
                        <div class="widget-bg">
                         
                        </div>
                        
                    </div>
                   
                    
                  
                </div>
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">DANH SÁCH PHIM</h5>
                                 <ul class="ecommerce-products list-unstyled row">
                                    @foreach($movie as $movie2)
                                    <li class="col-12 col-sm-6 col-md-3">
                                        <figure>
                                            <a href="phim/{{$movie2 -> id}}">
                                            <img src="/uploads/{{$movie2->image['filename']}}" width="100%" height="100%">

                                                <div>
                                                    <b><h4>{{$movie2 -> moviename}} </h4> </b>
                                                    
                                                   <p> <br> <span class="float-center">Ngày Khởi Chiếu: {{$movie2 -> opening_date}} </span>
                                                    </p>
                                                    <p><span class="float-center">Thể Loại: {{$movie2 -> type}} </span>
                                                    </p>
                                                </div>
                                            </a>
                                        </figure>
                                    </li>
                                    @endforeach 
                                    </ul>  
                                 <!--- phan trang san pham --->
                            </div> {!! $movie ->links() !!} 
                            
                        </div>
                        
                    </div>
                    
                </div>
            </main>
@include('footer')
