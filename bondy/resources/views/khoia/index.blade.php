<!DOCTYPE html>
<html lang="en">
<head>



  <title></title>
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

<form name="cd" id="cd"> 
<input style="color: red;
    margin-left: 1098px;
    margin-top: 100px;
    font-size: 26px;
    width: 13%;" id="txt" readonly type="text" value="90:00" border="0" name="disp">
</form>
<div class="container" style="    margin-top: -90px;">
  <h2>Đề Thi Khối A</h2>
  <ul class="nav nav-tabs">
    
    <li onclick="an()" class="bt1" style="width: 25%;"><a id="math" data-toggle="tab" href="#menu1">
    {{$m1}}</a></li>
    <li id="bt2" onclick="an()" class="bt2" style="width: 25%;"><a data-toggle="tab" href="#menu2"> {{$m2}}</a></li>
    <li id="bt3" onclick="an()" class="bt3"  style="width: 25%;"><a  data-toggle="tab" href="#menu3"> {{$m3}}</a></li>
  </ul>

  <div class="tab-content">
  <h2 class="h2" style="margin-left: 100px;
    width: 80%;height: 250px;
    text-align: center;
    background: #ccfde4;"><br><br><br>Hãy chọn môn thi bạn muốn làm!<br><br><br>
    Hãy click vào môn thi mà bạn muốn thi ở phía trên!</h2>
    <div id="home" class="tab-pane fade in active">
     
      
    </div>
    <div id="menu1" class="tab-pane fade">
    <br><br>
    
    <form method="post" action="{{route('dapanhoa')}}" id="toans">
      <div style="font-size: 22px;"  class="toan hidden">
      <div style="width: 95%; border: 1px solid black; margin-left: 40px; margin-top: 60px;border-radius: 15px;">
<p style="font-size: 18px;padding: 15px; margin-top: 50px;margin-right: 770px;text-align: center;">
<span>BỘ GIÁO DỤC VÀ ĐÀO TẠO   <br>           
ĐỀ THI THỬ  <br>

(Đề thi có 01 trang)  </span> 
  </p>
  <div style="margin-top: -138px;
    font-size: 17px;
    text-align: center;margin-left: 530px;">
 KỲ THI TRUNG HỌC PHỔ THÔNG QUỐC GIA NĂM 2018<br> 
 Bài thi: {{$m1}} <br>
 Thời gian làm bài: 90 phút mỗi môn, không kể thời gian phát đề<br>
  
   

-------------------------------------
</div>
  <br>
  <br>
</div>  
<h2 style="text-align: center;">ĐỀ BÀI<br>
    -----------------------</h2><br><br>
  <div style="width: 1067px; font-size: 22px;margin-left: 35px; margin-top: -35px;padding: 20px;border-radius: 40px;
    border: 2px solid blue;">      
      {{csrf_field()}}
      <?php 
        $i = 0;
      foreach ($mon1 as $key => $value){
        $i++;
        
       
        echo 
        '<tr>'.'<td >Câu '.$i.':</td>'.'<br>'
        .'</tr>';
        echo  
        '<tr>'.'<td>'.$value->question.'</td>'.'<br>'
        .'</tr>'; 
        echo 
        '<input type="radio" class="w3-radio"  id='.$value->id.' name="toan['.$value->id.']" value="A"/>'.'A. '.
        '<tr>'.'<td>'.$value->dapanA.'</td>'.'<br>'
        .'</tr>'; 
        echo '<input type="radio" class="w3-radio" id='.$value->id.' name="toan['.$value->id.']" value="B"/>'.'B. '.
        '<tr>'.'<td>'.$value->dapanB.'</td>'.'<br>'
        .'</tr>'; 
        echo '<input type="radio" class="w3-radio" id='.$value->id.' name="toan['.$value->id.']" value="C"/>'.'C. '.
        '<tr>'.'<td>'.$value->dapanC.'</td>'.'<br>'
        .'</tr>';
        echo '<input type="radio" class="w3-radio" id='.$value->id.' name="toan['.$value->id.']" value="D"/>'.'D. '.
        '<tr>'.'<td>'.$value->dapanD.'</td>'.'<br>'
        .'</tr>';
         
        echo 
        '<tr>'.'<td>------------------------------------------------------------------------------------</td>'.'<br>'
        .'</tr>';
      
      }

      ?>

   </div>
  <br>
    <!-- <button style="text-align: center; height: 48px; width: 129px; margin-bottom: 20px; margin-left: 497px;" id="click" type="submit" class="btn btn-primary hidden">NỘP BÀI </button> -->
    <button type="button" onclick="bt1()" style="margin-left: 510px;" class="btn btn-primary">nộp bài</button>
  <!-- </form> -->
 </div>
 <div id="toan" style="text-align: center;
    background: #dbf5f9;font-size: 37px;">
 <br><br>
 Bạn có muốn làm bài thi môn {{$m1}} ngay bây giờ??
 <br><br>
 Đề thi gồm 50 câu tương ứng với thời gian là 90 phút làm bài.<br>Hãy click vào nút bắt đầu để tiến hành làm bài!<br>
 <button type="button"   onclick="clicktoan()" style=" border-radius: 10px;padding: 20px;font-size: 30px;" class="btn btn-success">bắt đầu!</button>
 <br><br>
</div>
      </div>  
    
    <div id="menu2" class="tab-pane fade">
     
     <div style="font-size: 22px;" class="vatly hidden">
       <div style="width: 95%; border: 1px solid black; margin-left: 40px; margin-top: 60px;border-radius: 15px;">
<p style="font-size: 18px;padding: 15px; margin-top: 50px;margin-right: 770px;text-align: center;">
<span>BỘ GIÁO DỤC VÀ ĐÀO TẠO   <br>           
ĐỀ THI THỬ  <br>

(Đề thi có 01 trang)  </span> 
  </p>
  <div style="margin-top: -138px;
    font-size: 17px;
    text-align: center;margin-left: 530px;">
 KỲ THI TRUNG HỌC PHỔ THÔNG QUỐC GIA NĂM 2018<br> 
 Bài thi: {{$m2}}<br>
 Thời gian làm bài: 90 phút mỗi môn, không kể thời gian phát đề<br>
  
   

-------------------------------------
</div>
  <br>
  <br>
</div>  
     <h2 style="text-align: center;">ĐỀ BÀI<br>
    -----------------------</h2><br><br>
<div style="width: 1067px; font-size: 22px;margin-left: 35px; margin-top: -35px;padding: 20px;border-radius: 40px;
    border: 2px solid blue;"> 
      {{csrf_field()}}
      <?php 
        $i = 0;
      foreach ($mon2 as $key => $value){
        $i++;
        echo 
        '<tr>'.'<td >Câu '.$i.':</td>'.'<br>'
        .'</tr>';
        echo  
        '<tr>'.'<td>'.$value->question.'</td>'.'<br>'
        .'</tr>'; 
        echo 
        '<input type="radio" class="w3-radio"  id='.$value->id.' name="vatly['.$value->id.']" value="A"/>'.'A. '.
        '<tr>'.'<td>'.$value->dapanA.'</td>'.'<br>'
        .'</tr>'; 
        echo '<input type="radio" class="w3-radio" id='.$value->id.' name="vatly['.$value->id.']" value="B"/>'.'B. '.
        '<tr>'.'<td>'.$value->dapanB.'</td>'.'<br>'
        .'</tr>'; 
        echo '<input type="radio" class="w3-radio" id='.$value->id.' name="vatly['.$value->id.']" value="C"/>'.'C. '.
        '<tr>'.'<td>'.$value->dapanC.'</td>'.'<br>'
        .'</tr>';
        echo '<input type="radio" class="w3-radio" id='.$value->id.' name="vatly['.$value->id.']"  value="D"/>'.'D. '.
        '<tr>'.'<td>'.$value->dapanD.'</td>'.'<br>'
        .'</tr>';
         
        echo 
        '<tr>'.'<td>----------------------------------------------------------------------------------------------------------------------------------------</td>'.'<br>'
        .'</tr>';
      }

      ?>

   </div>
    <br>
    <!-- <button  style="text-align: center; height: 48px; width: 129px; margin-bottom: 20px; margin-left: 497px;" id="click" type="submit" class="btn btn-primary hidden">NỘP BÀI </button> -->
    <button type="button" onclick="bt2()" style="margin-left: 510px;" class="btn btn-primary">nộp bài</button><br>

  <!-- </form> -->
 </div>
  <div id="vatly" style="text-align: center;
    background: #dbf5f9;font-size: 37px;">
 <br><br>
 Bạn có muốn làm bài thi môn {{$m2}} ngay bây giờ??
 <br>
 Đề thi gồm 40 câu tương ứng với thời gian là 90 phút làm bài.<br>Hãy click vào nút bắt đầu để tiến hành làm bài!<br>
 <button type="button" onclick="clickvatly()" style=" border-radius: 10px;padding: 20px;font-size: 30px;" class="btn btn-success">bắt đầu!</button>
 <br><br>
</div>
      </div>
   
    <div id="menu3" class="tab-pane fade">
      
     <div style="font-size: 22px;" class="hoa hidden">
       <div style="width: 95%; border: 1px solid black; margin-left: 40px; margin-top: 60px;border-radius: 15px;">
<p style="font-size: 18px;padding: 15px; margin-top: 50px;margin-right: 770px;text-align: center;">
<span>BỘ GIÁO DỤC VÀ ĐÀO TẠO   <br>           
ĐỀ THI Thử  <br>

(Đề thi có 01 trang)  </span> 
  </p>
  <div style="margin-top: -138px;
    font-size: 17px;
    text-align: center;margin-left: 530px;">
 KỲ THI TRUNG HỌC PHỔ THÔNG QUỐC GIA NĂM 2018<br> 
 Bài thi: {{$m3}}<br>
 Thời gian làm bài: 90 phút mỗi môn, không kể thời gian phát đề<br>
  
   

-------------------------------------
</div>
  <br>
  <br>
</div>  
     <h2 style="text-align: center;">ĐỀ BÀI<br>
    -----------------------</h2><br><br>
  <div style="width: 1067px; font-size: 22px;margin-left: 35px; margin-top: -35px;padding: 20px;border-radius: 40px;
    border: 2px solid blue;"> 
      {{csrf_field()}}
      <?php 
        $i = 0;
      foreach ($mon3 as $key => $value){
        $i++;

        echo 
        '<tr>'.'<td >Câu '.$i.':</td>'.'<br>'
        .'</tr>';
        echo  
        '<tr>'.'<td>'.$value->question.'</td>'.'<br>'
        .'</tr>'; 
        echo 
        '<input type="radio" class="w3-radio"  id='.$value->id.' name="hoa['.$value->id.']" value="A"/>'.'A. '.
        '<tr>'.'<td>'.$value->dapanA.'</td>'.'<br>'
        .'</tr>'; 
        echo '<input type="radio" class="w3-radio" id='.$value->id.' name="hoa['.$value->id.']" value="B"/>'.'B. '.
        '<tr>'.'<td>'.$value->dapanB.'</td>'.'<br>'
        .'</tr>'; 
        echo '<input type="radio" class="w3-radio" id='.$value->id.' name="hoa['.$value->id.']" value="C"/>'.'C. '.
        '<tr>'.'<td>'.$value->dapanC.'</td>'.'<br>'
        .'</tr>';
        echo '<input type="radio" class="w3-radio" id='.$value->id.' name="hoa['.$value->id.']" value="D"/>'.'D. '.
        '<tr>'.'<td>'.$value->dapanD.'</td>'.'<br>'
        .'</tr>';
         
        echo 
        '<tr>'.'<td>----------------------------------------------------------------------------------------------------------------------------------------</td>'.'<br>'
        .'</tr>';
      }

      ?>
</div>
   
    <br>
   <!--  <button  style="text-align: center; height: 48px; width: 129px; margin-bottom: 20px; margin-left: 497px;" id="click" type="submit" class="btn btn-primary hidden">NỘP BÀI </button> -->
    <button type="button" onclick="bt3()"   style="margin-left: 510px;" class="btn btn-primary">nộp bài</button><br>

  
 </div>
  <div id="hoa" style="text-align: center;
    background: #dbf5f9;font-size: 37px;">
 <br><br>
 Bạn có muốn làm bài thi môn {{$m3}} ngay bây giờ??
 <br>Đề thi gồm 40 câu tương ứng với thời gian là 90 phút làm bài.<br>Hãy click vào nút bắt đầu để tiến hành làm bài!<br>
 <button type="button" onclick="clickhoa()" style=" border-radius: 10px;padding: 20px;font-size: 30px;" class="btn btn-success">bắt đầu!</button>
 <br><br>
</div>
      </div>
  </div>
</div>
<button style="border-radius: 10px;
    padding: 5px;
    margin-left: 510px;
    margin-bottom: 50px;
    margin-top: 30px;
    text-align: center;
    font-size: 33px;" type="submit" id="submitall" onclick="submit()" class=" submitall btn btn-primary hidden">Xem Kết Quả</button>
</form>
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
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>anh.hoang990307@gmail.com</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>##</a></li>
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

var mins
var secs;

function cd() {
  mins = 1 * m("90"); // change minutes here
  secs = 0 + s(":01"); // change seconds here (always add an additional second to your total)
  redo();
}
function cdt() {
  mins = 1 * m("90"); // change minutes here
  secs = 0 + s(":01"); // change seconds here (always add an additional second to your total)
  redo();
}
function cdy() {
  mins = 1 * m("90"); // change minutes here
  secs = 0 + s(":01"); // change seconds here (always add an additional second to your total)
  redo();
}
function m(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(0, i));
}

function s(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
  var disp;
  if(mins <= 9) {
      disp = " 0";
  } else {
      disp = " ";
  }
  disp += mins + ":";
  if(secs <= 9) {
      disp += "0" + secs;
  } else {
      disp += secs;
  }
  return(disp);
}

function redo() {
  secs--;
  if(secs == -1) {
      secs = 59;
      mins--;
  }
  document.cd.disp.value = dis(mins,secs); // setup additional displays here.
  if((mins == 0) && (secs == 0)) {
      window.alert("Time is up. Press OK to continue."); // change timeout message as required
      // window.location = "yourpage.htm" // redirects to specified page once timer ends and ok button is pressed
  } else {
   
   cd = setTimeout("redo()",1000);
   // cdt = setTimeout("redo()",1000);
  }
}

// window.onload = cd;
 var count = 0;
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
    cdt();
   $(".h2").addClass("hidden");
   $('.vatly').removeClass("hidden");
   $("#vatly").addClass("hidden");
 
  }
   function clickhoa(){
    cdy();
  count++;
  $(".h2").addClass("hidden");
   $('.hoa').removeClass("hidden");
   $("#hoa").addClass("hidden");
 
  }

function bt1() {
   var  t=confirm("Thời gian làm bài vẫn còn. Bạn vẫn muốn nộp bài chứ ???");
     if(t==true){
      clearTimeout(cd);
        $(".h2").removeClass("hidden");
        $(".bt1").addClass("hidden");
         $(".toan").addClass("hidden");
          if(count===3){
    $(".h2").addClass("hidden");
    $(".submitall").removeClass("hidden");
  }
   }else {
     event.preventDefault();

   };

}
function bt2() {
var  t=confirm("Thời gian làm bài vẫn còn. Bạn vẫn muốn nộp bài chứ ???");
     if(t==true){
       clearTimeout(cd);
       $(".h2").removeClass("hidden");
        $(".bt2").addClass("hidden");
         $(".vatly").addClass("hidden");
         if(count===3){
    $(".h2").addClass("hidden");
    $(".submitall").removeClass("hidden");
  }
   }else {
     event.preventDefault();

   };
 }
function bt3() {

var  t=confirm("Thời gian làm bài vẫn còn. Bạn vẫn muốn nộp bài chứ ???");
     if(t==true){
       clearTimeout(cd);
       $(".h2").removeClass("hidden");
        $(".bt3").addClass("hidden");
         $(".hoa").addClass("hidden");
         if(count===3){
    $(".h2").addClass("hidden");
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
