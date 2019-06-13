<!DOCTYPE html>
<html>
<head>
	<title>User list - PDF</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
	<style>
      @font-face {
        font-family: 'arial';
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url("font url");
      }
      body {
        font-family: Helvetica, sans-serif;
      }
      </style>
</head>
<body>
<div class="container">
<a href="{{ route('generate-pdf',['download'=>'pdf']) }}">Download PDF</a>	
	
	 
    
<div style="text-align: center; font-size: 40px; margin-top: 50px;">
   Bài làm của bạn!! <br>
  -------------------------------
</div>
        {{csrf_field()}}
          @foreach($hai as $key => $value)
      @foreach($value as $key1 =>$t)
    <?php 
    

    
 
          echo "{{ $t->question }}"; 
          echo "A: {{ $t->dapanA }}";  
           echo " B: {{ $t->dapanB }}"; 
            echo " C: {{ $t->dapanC }}"; 
             echo "D: {{ $t->dapanD }}";  

      
     ?>
  @endforeach
      @endforeach
</div>
</body>
</html>