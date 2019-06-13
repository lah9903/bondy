<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>sửa user</title>
    <!-- Core CSS - Include with every page -->
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


                   <div id="page-wrapper" style="margin-left: auto;">
                    <div class="row">
                       <!-- page header -->
                       <div class="col-lg-12">
                        <h1 class="page-header">Forms Sửa</h1>
                    </div>
                    <!--end page header -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Basic Form Elements
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="{{route('update.user',['id'=>$a->id])}}" method="post">
                                        {{csrf_field()}}
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input class="form-control" name="name" value="{{$a->name}}">

                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" placeholder="gmail" readonly name="email" value="{{$a->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Giới Tính</label>
                                                 <select class="form-control" name="gioi_tinh" >
                                                    <option value="2">Nam</option>
                                                    <option value="1">Nữ</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Số Điện Thoại</label>
                                                <input class="form-control" placeholder="gmail" readonly name="sdt" value="{{$a->sdt}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Role</label>
                                                <select class="form-control" name="role" >
                                                    <option value="2">user</option>
                                                    <option value="1">Admin</option>

                                                </select>
                                            </div>  




                                            <button type="submit" class="btn btn-primary">Submit </button>
                                            <button type="#" class="btn btn-success">Cancel</button>
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
        <script src="/assets/plugins/jquery-1.10.2.js"></script>
        <script src="/assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="/assets/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="/assets/plugins/pace/pace.js"></script>
        <script src="/assets/scripts/siminta.js"></script>
        <!-- Page-Level Plugin Scripts-->
        <script src="/assets/plugins/dataTables/jquery.dataTables.js"></script>
        <script src="/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
        </script>

    </body>

    </html>
