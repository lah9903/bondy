<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Bondy - Multipurpose Bootstrap Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.easy-pie-chart.css">
    <link rel="stylesheet" href="css/styles.css" title="mainStyle">

    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <link href="assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <script src="js/modernizr.custom.32033.js"></script>

    <!--[if IE]><script type="text/javascript" src="js/excanvas.compiled.js"></script><![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="pre-loader">
        <div class="load-con">
            <img src="img/logo-blue.png" class="animated fadeInDown" alt="">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="go-down">
        <a href="#whoWeAre">
            <i class="fa fa-angle-down fa-3x"></i>
        </a>
    </div>
    <!-- Wrap all page content here -->
    <div id="wrap" class="home">

        <header class="masthead">
            <div class="slider-container" id="slider">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <ul>
                            <li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="500">
                                <!-- MAIN IMAGE -->
                                <img src="img/dummy.png" data-lazyload="img/samples/test3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->





                            </li>
                            <li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="500">
                                <!-- MAIN IMAGE -->
                                <img src="img/dummy.png" data-lazyload="img/samples/hai11.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->

                            </li>
                            <li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="500">
                                <!-- MAIN IMAGE -->
                                <img src="img/dummy.png" data-lazyload="img/samples/4.png" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->

                            </li>

                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>

            </div>

            <!-- Fixed navbar -->
            <div class="navbar navbar-static-top" id="nav" role="navigation">
                <div class="theme-switcher">
                    <div class="colors">
                        <a href="javascript:void(0)" class="blue"></a>
                        <a href="javascript:void(0)" class="orange"></a>
                        <a href="javascript:void(0)" class="red"></a>
                    </div>
                    <a href="javascript:void(0)" class="Switcher"><span class="fa fa-pencil fa-lg"></span></a>
                </div>
                <div class="container">
                    <!--  <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="img/logo-blue.png" alt="">
                        </a>
                    </div> -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#slider">Trang chủ</a>
                            </li>
                            <li><a href="#">Tin Tức</a>
                            </li>
                            <li><a href="#services">Ôn Thi</a>
                            </li>
                            <li><a href="#team">Ôn Luyện</a>
                            </li>
                            <li><a href="#get-in-touch">Liên Hệ</a>
                            </li>
                            <li><a href="#history">Lịch sử</a>
                            </li>

                            @guest
                            <li class="social-nav visible-lg">
                                <a href="{{route('login')}}">LOGIN</i></a>
                            </li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a style="margin-left:53px;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!--/.container -->
            </div>
            <!--/.navbar -->

        </header>

        <section id="whoWeAre" class="hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>.we are bond<span>y</span>
                            </h1>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur temporibus a illum deleniti? Quae, adipisci praesentium quis omnis dignissimos!</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media scrollpoint sp-effect2">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-star fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">clean & clear</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                        <div class="media scrollpoint sp-effect2">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-support fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">24/7/365 support</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media right scrollpoint sp-effect1">
                            <a class="pull-right" href="#">
                                <i class="media-object fa fa-send fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">multipurpose layout</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                        <div class="media right scrollpoint sp-effect1">
                            <a class="pull-right" href="#">
                                <i class="media-object fa fa-slack fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">pixed perfect</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>.about bond<span>y</span>
                            </h1>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur temporibus a illum deleniti? Quae, adipisci praesentium quis omnis dignissimos!</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 scrollpoint sp-effect4">
                                <img src="img/samples/imac.png" class="img-responsive img-center" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-university fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Why Bondy</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-user fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">what we do</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-umbrella fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">our history</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-taxi fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Achievments</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="tintuc">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators vertical">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" id="tintuc">
                                <div class="item active">
                                    <img src="img/samples/865865.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="img/samples/2345.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="img/samples/1234.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3><b>Bản tin nhanh</b></h3>
                        <h5>Tổ hợp và hình thức thời gian các môn thi </h5>
                        <p> Bộ GD-ĐT vừa đưa ra hình thức và thời gian tham gia thi trong kỳ thi tốt nghiệp THPT
                            Tuyển sinh Đại Học, Cao Đẳng chính quy khiến nhiều bạn trẻ đã xôn xao chia sẻ
                            ý kiến của mình trên mạng xã hội.</p>
                        <ul>
                            <li><a href="http://thptquocgia.hocmai.vn/index.php/nhan-dinh-de/2018-nhan-dinh-de-thi-mon-ngu-van-thpt-quoc-gia-2018/" target="_blank">[2018] Nhận định đề thi môn Ngữ văn THPT quốc gia 2018</li>
                            <li><a href="http://butbi.hocmai.vn/giai-phap-hoan-hao-cho-teen-2k1-bat-tay-vao-luyen-thi-thptqg-2019.html" target="_blank">Giải pháp hoàn hảo cho teen 2k1 bắt tay vào luyện thi THPTQG 2019</li>
                            <li><a href="http://butbi.hocmai.vn/thong-tin-ki-thi-thpt" target="_blank">THÔNG TIN KỲ THI THPT QG</li>
                            <li><a href="http://butbi.hocmai.vn/2018-de-thi-toan-thpt-quoc-gia-2018-kho-hay-cuc-kho.html" target="_blank">[2018] Đề thi Toán THPT quốc gia 2018 khó hay cực khó?</li>
                            <li><a href="http://butbi.hocmai.vn/teen-2k-chu-y-bao-tin-vui-nhan-qua-lien-tay.html" target="_blank">Báo tin điểm thi, hứng “mưa quà tặng”</li>
                            <li><a href="http://butbi.hocmai.vn/cach-hoc-nhanh-nho-lau.html" target="_blank">5 mẹo dễ như ăn kẹo giúp 2k1 “học nhanh nhớ dai” toàn bộ kiến thức</li>
                            <li><a href="http://butbi.hocmai.vn/teen-2k1-da-mat-cong-thi-dai-hoc-thi-phai-truong-top.html" target="_blank">Teen 2k1: Đã mất công thi đại học thì phải đỗ trường TOP!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 scrollpoint sp-effect1">
                        <img src="img/samples/ipad-bl.png" class="img-responsive ipad-image img-center" alt="">
                    </div>
                    <div class="col-md-7 scrollpoint sp-effect2">
                        <h1>.Core Features of bond<span>Y</span>
                        </h1>
                        <div class="media media-circle">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Beautiful</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                        <div class="media media-circle">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Powerful</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                        <div class="media media-circle">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Responsive</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>ÔN THI</h1>

                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media media-services right scrollpoint sp-effect1">
                                    <a class="pull-right" data-toggle="modal" data-target="#myModal">
                                        <i class="media-object fa fa-paw fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Thi Theo Môn</h4>
                                        <p>Hãy bấm chọn biểu tượng để tiến chọn lựa môn thi</p>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Hãy chọn môn mà bạn muốn thi</h4>
                                            </div>
                                            <div class="modal-body">
                                                <a href="{{route('toan.index')}}" class="btn btn-primary">Toán</a>&nbsp;
                                                <a href="{{route('vatly.index')}}" class="btn btn-primary">Vật Lý</a>&nbsp;
                                                <a href="{{route('sinh.index')}}" class="btn btn-primary">Sinh Học</a>&nbsp;
                                                <a href="{{route('hoa.index')}}" class="btn btn-primary">Hóa Học</a>&nbsp;
                                                <button type="button" class="btn btn-primary">Tiếng Anh </button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media media-services right scrollpoint sp-effect2">
                                    <a class="pull-right" href="#">
                                        <i class="media-object fa fa-link fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Tài Liệu</h4>
                                        <p>Nơi cung cấp những tài liệu để giúp bạn đạt kết quả cao!</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="media media-services scrollpoint sp-effect2">
                                    <a class="pull-left" data-toggle="modal" data-target="#myModal1">
                                        <i class="media-object fa fa-send-o fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Thi Theo Khối</h4>
                                        <p>Luyện thi theo từng khối nghành</p>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal1" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Hãy bấm chọn vào biểu tượng sau đó tiến hành chọn khối mà bạn muốn thi</h4>
                                            </div>
                                            <div class="modal-body">

                                                <a href="{{route('khoia.index')}}" class="btn btn-primary">Khối A</a>&nbsp;
                                                <button type="button" class="btn btn-primary">Khối A1 </button>&nbsp;
                                                <button type="button" class="btn btn-primary">Khối B </button>&nbsp;
                                                <button type="button" class="btn btn-primary">Khối B1 </button>&nbsp;
                                                <button type="button" class="btn btn-primary">Khối B08 </button>&nbsp;
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media media-services scrollpoint sp-effect1">
                                    <a class="pull-left" href="#">
                                        <i class="media-object fa fa-film fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">VIDEO </h4>
                                        <p>Nơi cung cấp các video dạy học hay nhất cho bạn!</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <i class="fa fa-quote-left fa-4x"></i>
                            <h3>.Client's testimonials</h3>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="testimonials-carousel" class="carousel slide scrollpoint sp-effect3" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, cumque reprehenderit blanditiis consequatur magnam ipsa vitae deserunt odio nesciunt enim sint tempore magni sit alias illo quisquam unde. Laboriosam, minima!</p>
                                    <div class="row">
                                        <div class="col-md-4 col-md-push-5">
                                            <div class="author">
                                                <h5>Name dot name</h5>
                                                <p>Senior UI Developer - ScoopThemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, cumque reprehenderit blanditiis consequatur magnam ipsa vitae deserunt odio nesciunt enim sint tempore magni sit alias illo quisquam unde. Laboriosam.</p>
                                    <div class="row">
                                        <div class="col-md-4 col-md-push-5">
                                            <div class="author">
                                                <h5>Name dot name</h5>
                                                <p>Senior UI Developer - ScoopThemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#testimonials-carousel" data-slide="prev">
                                <i class="fa fa-angle-left fa-3x"></i>
                            </a>
                            <a class="right carousel-control" href="#testimonials-carousel" data-slide="next">
                                <i class="fa fa-angle-right fa-3x"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section id="buyNow" class="hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 scrollpoint sp-effect2">
                        <img src="img/samples/macbook-bl.png" alt="" class="img-responsive macbook-image img-center">
                    </div>
                    <div class="col-md-5 scrollpoint sp-effect1">
                        <h1>.Buy bond<span>y</span>
                        </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis esse velit nesciunt. Eius, atque, animi quidem libero harum modi cumque similique eveniet consequuntur dignissimos beatae necessitatibus ipsum cum unde deleniti! animi quidem libero harum modi cumque similique eveniet consequuntur!</p>
                        <a href="#" class="btn btn-primary btn-lg">Buy now</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>Khóa Học Ôn Luyện</h1>

                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect5">
                                <div class="member-image">
                                    <img src="img/samples/toan.png" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <!-- <h4>Thông Tin Liên Hệ</h4> -->
                                        <!-- <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul> -->
                                        <p>Thầy Vũ Khắc Ngọc hiện đang là giảng viên tại trường Đại Học Bách Khoa Hà Nội.Thầy có kinh nghiệm, phương pháp .....</p><br>
                                    </div>
                                </div>
                                <div class="member-name">
                                    <h4>Thầy: Vũ Khắc Ngọc</h4>
                                    <p>Giáo Viên Dạy Vật Lý</p>
                                    <p>Học Phí: 1.000.000 đồng</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect3">
                                <div class="member-image">
                                    <img src="img/samples/ly.png" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <!-- <h4>Thông tin liên hệ</h4> -->
                                        <!--  <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul> -->
                                        <p>Thầy Nguyễn Thanh Tùng đã có kinh nghiệm luyện thi hơn 10 năm với nhiều phương pháp dạy và ôn luyện .....</p>
                                    </div>
                                </div>
                                <div class="member-name member-odd">
                                    <h4> Thầy: Nguyễn Thanh Tùng</h4>
                                    <p>Giáo Viên Dạy Toán</p>
                                    <p>Học Phí: 1.000.000 đồng</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect5">
                                <div class="member-image">
                                    <img src="img/samples/anh.png" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <!--  <h4>Thông Tin Liên Hệ</h4> -->
                                        <!--  <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul> -->
                                        <p>Sinh viên xuất sắc toàn khóa 50 (2008- 2012) trường ĐH Kinh tế Quốc dân. Cô có nhiều các phương pháp học và nhớ từ vựng ....</p>
                                    </div>
                                </div>
                                <div class="member-name">
                                    <h4>Cô Nguyễn Phương Thảo(Thảo Fiona)</h4>
                                    <p>Giáo Viên Dạy Tiếng Anh</p>
                                    <p>Học Phí: 1.000.000 đồng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect3">
                                <div class="member-image">
                                    <img src="img/samples/hoa.png" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <!-- <h4>Thông Tin Liên Hệ</h4> -->
                                        <!--  <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul> -->
                                        <p>Tỉ mỉ - chi tiết - logic - rõ ràng-mạch lạc - dễ hiểu - luôn biến những bài toán phức tạp trở thành bài toán đơn giản.</p>
                                    </div>
                                </div>
                                <div class="member-name member-odd">
                                    <h4>Thầy: Lê Bá Trần Phương</h4>
                                    <p>Giáo Viên Dạy Toán</p>
                                    <p>Học Phí: 1.000.000 đồng</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-12" style="height:100%; text-align: center;">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div id="history" class="panel-heading">
                        <h1><b> Lịch sử Môn Thi </b></h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ngày thi</th>
                                        <th>Môn thi</th>
                                        <th>Điểm thi</th>
                                        <th>Đáp Án Đúng</th>
                                        <th>Số câu đã làm</th>
                                        <th>Số câu chưa làm</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    ?>

                                    @foreach($histories as $histories)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $histories->created_at}}</td>
                                        <td>{{ $histories->monhoc}}</td>
                                        <td><?php if ($histories->monhoc == "Toán Học") {
                                                $t = $histories->dap_an_dung;
                                                $ts = $t * 0.2;
                                            } else {
                                                $t = $histories->dap_an_dung;
                                                $ts = $t * 0.25;
                                            }
                                            echo $ts; ?></td>
                                        <td>{{ $histories->dap_an_dung}}/{{ $histories->so_cau_lam}}</td>
                                        <td>{{ $histories->so_cau_lam}}/60</td>
                                        <td>{{ $histories->so_cau_chua_lam}}</td>





                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>

                    </div>

                </div>
                <div class="panel panel-default">
                    <div id="history" class="panel-heading">
                        <h1><b> Lịch sử Khối Thi</b></h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">STT</th>
                                        <th style="text-align: center;">Ngày thi</th>
                                        <th style="text-align: center;">Khối thi</th>
                                        <th style="text-align: center;">Điểm môn số 1</th>
                                        <th style="text-align: center;">Điểm môn số 2</th>
                                        <th style="text-align: center;">Điểm môn số 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    ?>

                                    @foreach($historikhoi as $historikhoi)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $historikhoi->created_at}}</td>
                                        <td>{{ $historikhoi->mon1}}</td>

                                        <td><?php $d1 = $historikhoi->diem1;
                                            echo $d1 * 0.2 ?></td>
                                        <td><?php $d2 = $historikhoi->diem2;
                                            echo $d2 * 0.25 ?></td>
                                        <td><?php $d3 = $historikhoi->diem3;
                                            echo $d3 * 0.25 ?></td>





                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>

                    </div>

                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

        <section id="skills" class="hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h3>.we got skills</h3>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="95">
                            <span>95%</span>
                        </div>
                        <h4 class="skill-detail">html/css</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="75">
                            <span>75%</span>
                        </div>
                        <h4 class="skill-detail">wordpress</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="55">
                            <span>55%</span>
                        </div>
                        <h4 class="skill-detail">javascript</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="35">
                            <span>35%</span>
                        </div>
                        <h4 class="skill-detail">python</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>.the work</h1>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="filters" class="button-group">
                        <button data-filter="*" class="current">all items</button>
                        <button data-filter=".web-design">web design</button>
                        <button data-filter=".print">print</button>
                        <button data-filter=".mobile">mobile</button>
                        <button data-filter=".logo">logo</button>
                    </div>

                    <div id="container">
                        <div class="item col-md-3 col-sm-6 web-design">
                            <div class="details">
                                <img src="img/samples/portfolio/1.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-facebook"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Branding</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 print">
                            <div class="details">
                                <img src="img/samples/portfolio/2.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-star-o"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Point Of Sale</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 mobile">
                            <div class="details">
                                <img src="img/samples/portfolio/6.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-star"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Web Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 logo">
                            <div class="details">
                                <img src="img/samples/portfolio/7.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-pinterest"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Logo Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 web-design">
                            <div class="details">
                                <img src="img/samples/portfolio/8.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Web Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 logo">
                            <div class="details">
                                <img src="img/samples/portfolio/3.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Logo Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 print">
                            <div class="details">
                                <img src="img/samples/portfolio/4.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Branding</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 mobile">
                            <div class="details">
                                <img src="img/samples/portfolio/5.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Mobile</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="twitter" class="hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading white scrollpoint sp-effect3">
                            <h1>.bond<span>y</span>@ twitter</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="carousel-twitter" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-twitter" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-twitter" data-slide-to="1"></li>
                            <li data-target="#carousel-twitter" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, eos, non ad molestiae obcaecate sapiente dolorem magnam quisquam maiores voluptatem sunt cumque iure illo a dicta? <a href="https://twitter.com/scoopthemes">https://twitter.com/scoopthemes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, eos, non ad molestiae obcaecate sapiente dolorem magnam quisquam maiores voluptatem sunt cumque iure illo a dicta? <a href="https://twitter.com/scoopthemes">https://twitter.com/scoopthemes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, eos, non ad molestiae obcaecate sapiente dolorem magnam quisquam maiores voluptatem sunt cumque iure illo a dicta? <a href="#">https://twitter.com/scoopthemes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="follow">
                        <a href="#" class="btn btn-empty text-center">
                            <i class="fa fa-twitter"></i> Follow
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="get-in-touch">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>Thông Tin Liên Hệ</h1>

                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-details">
                            <div class="detail">
                                <h4>Địa chỉ</h4>
                                <p>#</p>
                            </div>
                            <div class="detail">
                                <h4>Điện thoại </h4>
                                <p>#</p>
                            </div>
                            <div class="detail">
                                <h4>email </h4>
                                <p>#</p>
                            </div>
                            <div class="detail">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube fa-2x"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group has-feedback left">
                                <input type="text" class="form-control" placeholder="NAME">
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback left">
                                <input type="email" class="form-control" placeholder="Email">
                                <i class="fa fa-envelope-o form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback left">
                                <textarea class="form-control" rows="7" placeholder="MESSAGE"></textarea>
                                <i class="fa fa-pencil-square-o form-control-feedback"></i>
                            </div>
                            <button class="btn btn-primary btn-lg pull-right" type="submit">SUBMIT</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>



        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <span class="divider grey"></span>
                    <h4>2014 Bond<span class="brandy">y</span> Agency.</h4>
                    <h5>by <a href="http://www.scoopthemes.com" target="_blank">ScoopThemes</a>
                    </h5>
                    <a href="#" class="scroll-top">
                        <img src="img/top.png" alt="" class="top">
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <!--/wrap-->

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
    <script src="js/script.js"></script>
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            appMaster.preLoader();
            appMaster.smoothScroll();
            appMaster.animateScript();
            appMaster.navSpy();
            appMaster.revSlider();
            appMaster.stellar();
            appMaster.skillsChart();
            appMaster.maps();
            appMaster.isoTop();
            appMaster.canvasHack();
        });
    </script>

</body>

</html>