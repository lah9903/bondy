
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
  <!-- Core CSS - Include with every page -->
  <!-- Core CSS - Include with every page -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
  <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="/assets/css/style.css" rel="stylesheet" />
  <link href="/assets/css/main-style.css" rel="stylesheet" />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
  <!-- Page-Level CSS -->
  <link href="/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<style type="text/css">
  
label{
  font-size: 25px;

}

</style>
</head>
<body>
<div style="width: 95%; border: 1px solid black; margin-left: 40px; margin-top: 60px;border-radius: 15px;">
<p style="font-size: 24px;padding: 15px; margin-top: 50px;margin-right: 810px;text-align: center;">
<span>BỘ GIÁO DỤC VÀ ĐÀO TẠO   <br>           
ĐỀ THI Thử  <br>

(Đề thi có 01 trang)  </span> 
  </p>
  <div style="margin-top: -138px;
    font-size: 22px;
    text-align: center;margin-left: 610px;">
 KỲ THI TRUNG HỌC PHỔ THÔNG QUỐC GIA NĂM 2018<br> 
 Bài thi: TOÁN<br>
 Thời gian làm bài: 90 phút, không kể thời gian phát đề<br>
  
   

-------------------------------------
</div>
  <br>
  <br>
</div>
<div style="border: 5px double #205a2a;margin-top: 50px;width: 75%;margin-left: 190px;">
<h3 style="background-color: blue;margin-top: auto;text-align: center;font-size: 32px;color: white;padding-bottom: 10px;padding-top: 10px;">Kết Quả</h3>
<form method="post" style="margin-left: -140px;" action="{{route('save.vatly')}}">
{{csrf_field()}}
<div style="margin-left: 480px;margin-top: 100px;">
<div style="margin-top: 105px;" >
<span style="font-size: 100px;color: blue;font-weight: bold;text-align: center;margin-left: 70px;">{{$t}}</span><br>
  <label>Số Đáp Án trả lời  Đúng: {{$i}}</label><br>
  <label>Số Câu đã Chọn: {{$b}}</label><br>
  <label>Số Câu chưa Chọn: {{$c}}</label>

</div>

<input type="hidden" name="dung" value="{{$i}}">
<input type="hidden" name="scl" value="{{$b}}">
<input type="hidden" name="monhoc" value="Toán Học">
<input type="hidden" name="so_cau_chua_lam" value="{{$c}}">

<input type="hidden" name="userId" value="{{$userId}}">
<button type="submit" style="margin-top: 80px;margin-left: 30px;" class="back btn btn-primary">xem đáp án</button>
<button  style="margin-top: 77px;margin-left: 16px;" class="back btn btn-primary"><a style="color: white;text-decoration: unset;font-size: 16px;" href="{{route('home')}}">Trang chủ</button> 
</div>
</form>


</div><br><br><br>
  <!-- Footer -->
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
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Ngô  Duy Hải</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>duyhai0401@gmail.com</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Bắc Từ Liêm - Hà Nội - Việt Nam</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>01677057478</a></li>
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
  <!--
      This script downloaded from www.JavaScriptBank.com
      Come to view and download over 2000+ free javascript at www.JavaScriptBank.com
  -->

</body>