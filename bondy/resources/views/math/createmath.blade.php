<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="/assets/css/style.css" rel="stylesheet" />
      <link href="/assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="/img/logo-blue.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger"></span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success"></span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                   
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning"></span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="/assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong>{{ Auth::user()->name }}</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    
                  <li class="selected">
                        <a href="{{route('users.index')}}"><i class="fa fa-user fa-fw"></i>USER</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i>Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i>TABLE<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('math.index')}}">TOÁN HỌC</a>
                            </li>
                            <li>
                                <a href="{{route('chemistry.index')}}">HÓA HỌC</a>
                            </li>
                            <li>
                                <a href="{{route('physical.index')}}">VẬT LÝ</a>
                            </li>
                            <li>
                                <a href="{{route('biological.index')}}">SINH HỌC</a>
                            </li>
                            <li>
                                <a href="{{route('enghlish.index')}}">TIẾNG ANH</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Forms Thêm Mới Đề Toán</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h2> Nội Dung </h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                     <form action="{{ route('math.store') }}" method="POST" >
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                            <div class="form-group">
                                                <label @if ($errors->first('question')) style="color:red" @endif >Câu hỏi</label>
                                                
                                                    <input type="text" style="height:auto;" @if ($errors->first('question')) style="border-color:red" @endif type="text" name="question" class="form-control" id="exampleInputPassword1" placeholder="" >
                                                    @if ($errors->first('question'))
                                                        <span style="color: red">{{ $errors->first('question') }}</span>
                                                    @endif
                                            </div>
                                            <div class="form-group">
                                                <label @if ($errors->first('dapanA')) style="color:red" @endif >Đáp án A</label>
                                                
                                                    <input style="height: 40px; width: 155px;" @if ($errors->first('dapanA')) style="border-color:red" @endif type="text" name="dapanA" class="form-control" id="exampleInputPassword1" placeholder="" >
                                                    @if ($errors->first('dapanA'))
                                                        <span style="color: red">{{ $errors->first('dapanA') }}</span>
                                                    @endif
                                            </div>
                                            <div class="form-group">
                                                <label @if ($errors->first('dapanB')) style="color:red" @endif >Đáp án B</label>
                                                
                                                    <input style="height: 40px; width: 155px;" @if ($errors->first('dapanB')) style="border-color:red" @endif type="text" name="dapanB" class="form-control" id="exampleInputPassword1" placeholder="" >
                                                    @if ($errors->first('dapanB'))
                                                        <span style="color: red">{{ $errors->first('dapanB') }}</span>
                                                    @endif
                                            </div>
                                            <div class="form-group" style="margin-top: -157px;margin-left: 432px;">
                                                <label @if ($errors->first('dapanC')) style="color:red" @endif >Đáp án C</label>
                                                
                                                    <input style="height: 40px; width: 155px;"  @if ($errors->first('dapanC')) style="border-color:red" @endif type="text" name="dapanC" class="form-control" id="exampleInputPassword1" placeholder="" >
                                                    @if ($errors->first('dapanC'))
                                                        <span style="color: red">{{ $errors->first('dapanC') }}</span>
                                                    @endif
                                            </div>
                                            <div class="form-group" style=" margin-left: 432px; margin-top: 15px; ">
                                                <label @if ($errors->first('dapanD')) style="color:red" @endif >Đáp án D</label>
                                                
                                                    <input style="height: 40px; width: 155px;"  @if ($errors->first('dapanD')) style="border-color:red" @endif type="text" name="dapanD" class="form-control" id="exampleInputPassword1" placeholder="" >
                                                    @if ($errors->first('dapanD'))
                                                        <span style="color: red">{{ $errors->first('dapanD') }}</span>
                                                    @endif
                                            </div>
                                            <div style=" margin-top: 28px;" class="form-group">
                                                <label @if ($errors->first('dung')) style="color:red" @endif >Đáp án đúng</label>
                                                
                                                    <select style="height: 40px; width: 155px;" @if ($errors->first('dung')) style="border-color:red" @endif type="text" name="dung" class="form-control" id="exampleInputPassword1" placeholder="" value="" >
                                                    <option value="A">Đáp án A</option>
                                                     <option value="B">Đáp án B</option>
                                                     <option value="C">Đáp án C</option>
                                                     <option value="D">Đáp án D</option>
                                                    </select>
                                            </div>
                                            <div style="margin-top: -75px; margin-left: 435px;" class="form-group">
                                                <label @if ($errors->first('role')) style="color:red" @endif >Độ khó</label>
                                                
                                                    <select style="width: 145px;" @if ($errors->first('role')) style="border-color:red" @endif type="text" name="role" class="form-control" id="exampleInputPassword1" placeholder="" value="" >
                                                    <option value="1">bình thường</option>
                                                     <option value="2">Khó</option>
                                                    </select>
                                            </div>
                                            <br>
                                             <button type="submit" class="btn btn-primary">Thêm </button> &nbsp;&nbsp;&nbsp;
                                            <button type="#" class="btn btn-success">Hủy Bỏ</button>
                        </div>  
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
                    <!--End Advanced Tables -->
                </div>

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
