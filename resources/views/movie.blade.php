<!DOCTYPE html>
<html>

@include('header')
          <style>
          .container1 {
  overflow: hidden;
}

.filterDiv1 {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none; /* Hidden by default */
}

/* The "show" class is added to the filtered elements */
.show1 {
  display: block;
}

/* Style the buttons */
.btn1 {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

/* Add a light grey background on mouse-over */
.btn1:hover {
  background-color: #ddd;
}

/* Add a dark background to the active button */
.btn1.active {
  background-color: #666;
  color: white;
}
</style> 
<script type="text/javascript">
    filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv1");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show1");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show1");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1); 
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer1");
var btns = btnContainer.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Nội Dung Phim</h5>
                    <p class="mr-0 text-muted hidden-sm-down">@foreach($movie as $mov)
                                         {{ $mov->moviename }} 
                                         @endforeach</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a>
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
                <div class="row">
                    <!-- User Summary -->
                    <div class="col-12 col-md-4 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="contact-info">
                                    <header class="text-center">
                                        
                                        <!-- /.dropdown -->
                                        <div class="text-center">
                                           @foreach($movie as $mov)
                                                <img src="{{url('uploads/')}}/{{$mov->image['filename']}}"  style="width:250px;" alt="">
                                           @endforeach
                                        </div>
                                        <h4 class="mt-1"><a href="#">
                                        @foreach($movie as $mov)
                                         {{ $mov->moviename }} 
                                         @endforeach

                                        <!-- hien thi ten sach thi dung cu phap nay -->

                                       </a> </h4>
                                        <div class="contact-info-address">
                                            <big><p> Thể loại: @foreach($movie as $mov)
                                         {{ $mov->type }} 
                                         @endforeach </p></big>
                                        </div>
                                       
                                    </header>
                                    
                                    
                                </div>
                                <!-- /.contact-info -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <!-- Tabs Content -->
                    <div class="col-12 col-md-8 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="tabs mr-t-10">
                                    <ul class="nav nav-tabs"><h4>
                                        <li class="nav-item"><a href="page-profile.html#home-tab-bordered-1" class="nav-link active" data-toggle="tab" aria-expanded="true">Thông Tin Chi Tiết</a></li>

                                    </h4>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home-tab-bordered-1">
                                            <ul>
                                                <li class="media">
                                                    
                                                    <div class="media-body"><span class="badge badge-pink py-1 px-2 fs-11 fw-500 mr-1 align-top text-uppercase text-inverse">Mô tả</span>
                                                        
                                                        <p class="media-body-content">
                                                            @foreach($movie as $mov)
                                                            {{ $mov->description }} 
                                                             @endforeach</p>
                                                        <p><span class="media-body-content">Đạo Diễn: {{ $mov->director }}</span>
                                                        </p>
                                                        <p><span class="media-body-content">Diễn Viên: {{ $mov->cast }}</span>
                                                        </p>     
                                                        <p><span class="media-body-content">Thể Loại: {{ $mov->type }}</span>
                                                        </p>
                                                        <p><span class="media-body-content">Thời Lượng: {{ $mov->duration_min }}</span>
                                                        </p>
                                                        <p><span class="media-body-content">Ngày Khởi Chiếu: {{ $mov->opening_date }}</span>
                                                        </p>
                                                    </div>
                                                </li> 
                                            </ul>
                                            <!-- /.widget-activity -->
                                        </div>
                                        <!-- /.tab-pane -->
                                        
                                        
                                    </div>
                                    <!-- /.tab-content -->
                                </div>

                                <!--  /.tabs -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>

            <div class="widget-list">
                <div class="row">
                    <div class="col-12 col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix"> <h5> Đặt Vé </h5>
                            <!-- Control buttons -->
<div id="myBtnContainer1">
  <button class="btn1 active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn1" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn1" onclick="filterSelection('animals')"> Animals</button>
  <button class="btn1" onclick="filterSelection('fruits')"> Fruits</button>
  <button class="btn1" onclick="filterSelection('colors')"> Colors</button>
</div>

<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
<div class="container1">
  <div class="filterDiv1 cars">BMW</div>
  <div class="filterDiv1 colors fruits">Orange</div>
  <div class="filterDiv1 cars">Volvo</div>
  <div class="filterDiv1 colors">Red</div>
  <div class="filterDiv1 cars animals">Mustang</div>
  <div class="filterDiv1 colors">Blue</div>
  <div class="filterDiv1 animals">Cat</div>
  <div class="filterDiv1 animals">Dog</div>
  <div class="filterDiv1 fruits">Melon</div>
  <div class="filterDiv1 fruits animals">Kiwi</div>
  <div class="filterDiv1 fruits">Banana</div>
  <div class="filterDiv1 fruits">Lemon</div>
  <div class="filterDiv1 animals">Cow</div>
</div> </div>
                        </div>
                    </div>  
                </div>
            </div>      
        </main>
        
        
       @include('footer')