
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
<div><img style="height: 80%;
    width: 100%;" src="/img/th1.png">

</div>
<div>
<div style="border: 5px double #205a2a;margin-top: 50px;width: 95%;margin-left: 40px;">
<h3 style="background-color: blue;margin-top: auto;text-align: center;font-size: 32px;color: white;padding-bottom: 10px;padding-top: 10px;">Kết Quả</h3>
<form method="post" style="margin-left: -140px;" action="{{route('khoiadapan')}}">
{{csrf_field()}}
<div >
<div style="    margin-left: -710px;text-align: center;">
	<div><h2>Môn Số 1</h2><br>
	<span style="font-size: 100px;color: blue;font-weight: bold;text-align: center;margin-left: -38px;">{{$t1}}</span><br>
	<label>Số Đáp Án trả lời  Đúng: {{$itoan}}</label><br>
	<label>Số Câu đã Chọn: {{$btoan}}</label><br>
	<label>Số Câu chưa Chọn: {{$ctoan}}</label><br>
	</div>
	<div style="margin-left: 768px;text-align: center;
    margin-top: -350px;">
	<h2>Môn Số 2</h2><br>
	<span style="font-size: 100px;color: blue;font-weight: bold;text-align: center;margin-left: -5px;">{{$t2}}</span><br>
	<label>Số Đáp Án trả lời  Đúng: {{$ily}}</label><br>
	<label>Số Câu đã Chọn: {{$bly}}</label><br>
	<label>Số Câu chưa Chọn: {{$cly}}</label><br>
	</div>
	<div style="margin-left: 1531px;text-align: center;
    margin-top: -352px;">
	<h2>Môn Số 3</h2><br>
	<span style="font-size: 100px;color: blue;font-weight: bold;text-align: center;margin-left: 10px;">{{$t3}}</span><br>
	<label>Số Đáp Án trả lời  Đúng: {{$ihoa}}</label><br>
	<label>Số Câu đã Chọn: {{$bhoa}}</label><br>
	<label>Số Câu chưa Chọn: {{$choa}}</label>
  </div>

</div>



<input type="hidden" name="userId" value="{{$userId}}">
<input type="hidden" name="mon1" value="{{$khoit}}">

<input type="hidden" name="diem1" value="{{$itoan}}">
<input type="hidden" name="diem2" value="{{$ily}}">
<input type="hidden" name="diem3" value="{{$ihoa}}">
<button type="submit" style="margin-top: 80px;margin-left: 615px;" class="back btn btn-primary">xem đáp án</button>
<button  style="margin-top: 77px;margin-left: 16px;" class="back btn btn-primary"><a style="color: white;text-decoration: unset;font-size: 16px;" href="{{route('home')}}">Trang chủ</button>	
</div>
</form>


</div>
</div><br><br><br><br>
<script >

</script>
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