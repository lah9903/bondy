<!DOCTYPE html>
<html lang="en">
<head>



  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
 <link href="/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
 <link href="/assets/css/style.css" rel="stylesheet" />
 <link href="/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
 <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
<style type="text/css">
#txt {
  border:none;
  font-family:verdana;
  font-size:16pt;
  font-weight:bold;
  border-right-color:#FFFFFF
}

</style>
</head>
<body>
<div><img style="height: 80%;
    width: 100%;" src="/img/th1.png">

</div>
<div style="width: 95%; border: 1px solid black; margin-left: 40px; margin-top: 60px;border-radius: 15px;">
<p style="font-size: 24px;padding: 15px; margin-top: 50px;margin-right: 810px;text-align: center;">
<span>BỘ GIÁO DỤC VÀ ĐÀO TẠO   <br>           
ĐỀ THI CHÍNH THỨC  <br>

(Đề thi có 01 trang)  </span> 
  </p>
  <div style="margin-top: -138px;
    font-size: 22px;
    text-align: center;margin-left: 530px;">
 KỲ THI TRUNG HỌC PHỔ THÔNG QUỐC GIA NĂM 2018<br> 
 Bài thi: Khối A<br>
 Thời gian làm bài: 90 phút mỗi môn, không kể thời gian phát đề<br>
  
   

-------------------------------------
</div>
  <br>
  <br>
</div>
<form name="cd">
<input style="color: red;
    margin-left: 1098px;
    margin-top: 100px;
    font-size: 26px;
    width: 13%;" id="txt" readonly type="text"  border="0" name="disp">
</form>
<div class="container" style="    margin-top: -90px;">
  <h2>Đề Thi Khối A</h2>
  <ul class="nav nav-tabs">
    
   <li onclick="an()" class="bt1" style="width: 25%;"><a id="math" data-toggle="tab" href="#menu1">
    Môn số 1</a></li>
    <li id="bt2" onclick="an()" class="bt2" style="width: 25%;"><a data-toggle="tab" href="#menu2"> Môn số 2</a></li>
    <li id="bt3" onclick="an()" class="bt3"  style="width: 25%;"><a  data-toggle="tab" href="#menu3"> Môn số 3</a></li>
  </ul>

  <div class="tab-content">
  
    <div id="home" class="tab-pane fade in active">
    <h2 class="h2" style="margin-left: 100px;
    width: 80%;height: 250px;
    text-align: center;
    background: #ccfde4;"><br><br><br>Hãy chọn môn thi bạn muốn xem đáp án!<br><br><br></h2> 
      
    </div>
    <div id="menu1" class="tab-pane fade">
    <br><br>
    
    
      <div style="font-size: 22px;"  class="toan ">
      <div style="width: 95%; border: 1px solid black; margin-left: 40px; margin-top: 60px;border-radius: 15px;">
<p style="font-size: 18px;padding: 15px; margin-top: 50px;margin-right: 770px;text-align: center;">
<span>BỘ GIÁO DỤC VÀ ĐÀO TẠO   <br>           
ĐỀ THI CHÍNH THỨC  <br>

(Đề thi có 01 trang)  </span> 
  </p>
  <div style="margin-top: -138px;
    font-size: 17px;
    text-align: center;margin-left: 530px;">
 KỲ THI TRUNG HỌC PHỔ THÔNG QUỐC GIA NĂM 2018<br> 
 Bài thi: Môn số 1<br>
 Thời gian làm bài: 90 phút mỗi môn, không kể thời gian phát đề<br>
  
   

-------------------------------------
</div>
  <br>
  <br>
</div>  
<h2 style="text-align: center;">ĐỀ BÀI<br>
    -----------------------</h2><br><br>
        
      {{csrf_field()}}
      <?php 
        $i = 1;
      ?>
      <div style="width: 1000px; font-size: 22px;margin-left: 55px; margin-top: -35px;padding: 20px;border-radius: 40px;
    border: 2px solid blue;">
       @foreach($mon1 as $key => $tt)
     @foreach($tt as $key => $t)
    
        
            
            
            @if($i%2 !=0)
            <div style="padding: 5px; background: #dcf9ad;width: 950px;font-size: 22px;margin-top: 10px; border-radius: 5px;">
            @else
             <div style="padding: 5px; background: #d4f3ea;width: 950px;font-size: 22px;margin-top: 10px; border-radius: 5px;">
             @endif
            <tr>
            <tr> câu  {{$i++}} : {{ $t["question"] }}</tr><br>
            <tr>A: {{ $t["dapanA"] }}</tr><br>
             <tr>B: {{ $t["dapanB"] }}</tr><br>
              <tr>C: {{ $t["dapanC"] }}</tr><br>
               <tr>D: {{ $t["dapanD"] }}</tr><br>
                <tr><span style="color: red;">Đáp án đúng là: {{ $t["dung"] }}  </span></tr><br>
                @foreach($a1 as $key2 => $value2)
                @if($t["id"] === $key2)
                   <span style="color: #428bca;"> Đáp án bạn chọn là: {{$value2}}<span> <br>
                @endif
                @endforeach
                 <td>--------------------------------------------------------------------------------------------</td>
       
            </tr>
            </div>
       
         
         @endforeach
      @endforeach
   </div>
   <br>
    <!-- <button style="text-align: center; height: 48px; width: 129px; margin-bottom: 20px; margin-left: 497px;" id="click" type="submit" class="btn btn-primary hidden">NỘP BÀI </button> -->
   
 </div>

      </div>  
    
    <div id="menu2" class="tab-pane fade">
     
     <div style="font-size: 22px;" class="vatly ">
           <div style="width: 95%; border: 1px solid black; margin-left: 40px; margin-top: 60px;border-radius: 15px;">
<p style="font-size: 18px;padding: 15px; margin-top: 50px;margin-right: 770px;text-align: center;">
<span>BỘ GIÁO DỤC VÀ ĐÀO TẠO   <br>           
ĐỀ THI CHÍNH THỨC  <br>

(Đề thi có 01 trang)  </span> 
  </p>
  <div style="margin-top: -138px;
    font-size: 17px;
    text-align: center;margin-left: 530px;">
 KỲ THI TRUNG HỌC PHỔ THÔNG QUỐC GIA NĂM 2018<br> 
 Bài thi: Môn số 2<br>
 Thời gian làm bài: 90 phút mỗi môn, không kể thời gian phát đề<br>
  
   

-------------------------------------
</div>
  <br>
  <br>
</div> 
    <h2 style="text-align: center;">ĐỀ BÀI<br>
    -----------------------</h2><br><br>
        
      {{csrf_field()}}
      <?php 
        $i = 1;
      ?>
      <div style="width: 1000px; font-size: 22px;margin-left: 55px; margin-top: -35px;padding: 20px;border-radius: 40px;
    border: 2px solid blue;">
       @foreach($mon2 as $key => $tt)
     @foreach($tt as $key => $t)
    
        
            
            
            @if($i%2 !=0)
            <div style="padding: 5px; background: #dcf9ad;width: 950px;font-size: 22px;margin-top: 10px; border-radius: 5px;">
            @else
             <div style="padding: 5px; background: #d4f3ea;width: 950px;font-size: 22px;margin-top: 10px; border-radius: 5px;">
             @endif
            <tr>
            <tr> câu  {{$i++}} : {{ $t["question"] }}</tr><br>
            <tr>A: {{ $t["dapanA"] }}</tr><br>
             <tr>B: {{ $t["dapanB"] }}</tr><br>
              <tr>C: {{ $t["dapanC"] }}</tr><br>
               <tr>D: {{ $t["dapanD"] }}</tr><br>
                <tr><span style="color: red;">Đáp án đúng là: {{ $t["dung"] }}  </span></tr><br>
                @foreach($a2 as $key2 => $value2)
                @if($t["id"] === $key2)
                   <span style="color: #428bca;"> Đáp án bạn chọn là: {{$value2}}<span> <br>
                @endif
                @endforeach
                 <td>--------------------------------------------------------------------------------------------</td>
       
            </tr>
            </div>
       
         
         @endforeach
      @endforeach
   </div>
   <br>
    <!-- <button  style="text-align: center; height: 48px; width: 129px; margin-bottom: 20px; margin-left: 497px;" id="click" type="submit" class="btn btn-primary hidden">NỘP BÀI </button> -->
    

  <!-- </form> -->
 </div>

      </div>
   
    <div id="menu3" class="tab-pane fade">
      
     <div style="font-size: 22px;" class="hoa ">
           <div style="width: 95%; border: 1px solid black; margin-left: 40px; margin-top: 60px;border-radius: 15px;">
<p style="font-size: 18px;padding: 15px; margin-top: 50px;margin-right: 770px;text-align: center;">
<span>BỘ GIÁO DỤC VÀ ĐÀO TẠO   <br>           
ĐỀ THI CHÍNH THỨC  <br>

(Đề thi có 01 trang)  </span> 
  </p>
  <div style="margin-top: -138px;
    font-size: 17px;
    text-align: center;margin-left: 530px;">
 KỲ THI TRUNG HỌC PHỔ THÔNG QUỐC GIA NĂM 2018<br> 
 Bài thi: Môn số 3<br>
 Thời gian làm bài: 90 phút mỗi môn, không kể thời gian phát đề<br>
  
   

-------------------------------------
</div>
  <br>
  <br>
</div> 
     <h2 style="text-align: center;">ĐỀ BÀI<br>
    -----------------------</h2><br><br>
        
      {{csrf_field()}}
      <?php 
        $i = 1;
      ?>
      <div style="width: 1000px; font-size: 22px;margin-left: 55px; margin-top: -35px;padding: 20px;border-radius: 40px;
    border: 2px solid blue;">
       @foreach($mon3 as $key => $tt)
     @foreach($tt as $key => $t)
    
        
            
            
            @if($i%2 !=0)
            <div style="padding: 5px; background: #dcf9ad;width: 950px;font-size: 22px;margin-top: 10px; border-radius: 5px;">
            @else
             <div style="padding: 5px; background: #d4f3ea;width: 950px;font-size: 22px;margin-top: 10px; border-radius: 5px;">
             @endif
            <tr>
            <tr> câu  {{$i++}} : {{ $t["question"] }}</tr><br>
            <tr>A: {{ $t["dapanA"] }}</tr><br>
             <tr>B: {{ $t["dapanB"] }}</tr><br>
              <tr>C: {{ $t["dapanC"] }}</tr><br>
               <tr>D: {{ $t["dapanD"] }}</tr><br>
                <tr><span style="color: red;">Đáp án đúng là: {{ $t["dung"] }}  </span></tr><br>
                @foreach($a3 as $key2 => $value2)
                @if($t["id"] === $key2)
                   <span style="color: #428bca;"> Đáp án bạn chọn là: {{$value2}}<span> <br>
                @endif
                @endforeach
                 <td>--------------------------------------------------------------------------------------------</td>
       
            </tr>
            </div>
       
         
         @endforeach
      @endforeach
   </div>
   <br>
  

  
 </div>
      </div>
  </div>
</div>
<button  style="text-align: center; height: 48px; width: 129px; margin-bottom: 20px; margin-left: 605px;" class="btn btn-primary click"><a style="text-decoration: unset;font-size: 24px;color: white;" href="{{route('home')}}">Trang chủ</button>
  <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Thông Tin liên hệ</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>nhóm 08</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>anh.hoang1799@gmail.com</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i></a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>##</a></li>
           <!--  <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
         -->          </ul>
       </div>
     </div>
     <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
        <ul class="list-unstyled list-inline social text-center">
          <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
          <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
        </ul>
      </div>
    </hr>
  </div>  
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
      <p>National Transaction Corporation is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
      <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
    </div>
  </hr>
</div>  
</div>
</section>
<!-- ./Footer -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.easypiechart.min.js"></script>

<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="js/waypoints.min.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
<script src="/js/script.js"></script>
</body>

<script language="javascript">
// Created by: Neill Broderick :: http://www.bespoke-software-solutions.co.uk/downloads/downjs.php

// window.onload = cd;
 
 function clicktoan(){
   cd();
   count++;
   $(".h2").addClass("hidden");
   $('.toan').removeClass("hidden");
   $("#toan").addClass("hidden");
  
   // $("#toan :input").prop("disabled", true);
  }
</script>
<script type="text/javascript">


   function clickvatly(){
   count++;
   $(".h2").addClass("hidden");
   $('.vatly').removeClass("hidden");
   $("#vatly").addClass("hidden");
 
  }
   function clickhoa(){
    
  count++;
  $(".h2").addClass("hidden");
   $('.hoa').removeClass("hidden");
   $("#hoa").addClass("hidden");
 
  }

function bt1() {
   var  t=confirm("Thời gian làm bài vẫn còn. Bạn vẫn muốn nộp bài chứ ???");
     if(t==true){
        $(".h2").removeClass("hidden");
        $(".bt1").addClass("hidden");
         $(".toan").addClass("hidden");
   }else {
     event.preventDefault();

   };

}
function bt2() {
var  t=confirm("Thời gian làm bài vẫn còn. Bạn vẫn muốn nộp bài chứ ???");
     if(t==true){
       $(".h2").removeClass("hidden");
        $(".bt2").addClass("hidden");
         $(".vatly").addClass("hidden");
         if(count===3){
   
    $(".submitall").removeClass("hidden");
  }
   }else {
     event.preventDefault();

   };
 }
function bt3() {

var  t=confirm("Thời gian làm bài vẫn còn. Bạn vẫn muốn nộp bài chứ ???");
     if(t==true){
       $(".h2").removeClass("hidden");
        $(".bt3").addClass("hidden");
         $(".hoa").addClass("hidden");
         if(count===3){
   
    $(".submitall").removeClass("hidden");
  }
   }else {
     event.preventDefault();

   };
}
function an(){
   $(".h2").addClass("hidden");
}
</script>
</html>
