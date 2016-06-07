<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Idea Management System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @section('CSS_REF')


    @yield('styleSheets')
            <!-- Bootstrap 3.3.5 -->
   <link rel="stylesheet" href="{{asset('/admin/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">
    @show

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        #polina {

            background: rgba(0,0,0,0.4);
            padding: 2rem;
            margin: auto;
            zoom: 1.1;

        }


        .wrapper {
        //    background-color:black;
        }video {
             position: fixed;
             top: 50%;
             left: 50%;
             min-width: 100%;
             min-height: 100%;
             width: auto;
             height: auto;
             z-index: -100;
             transform: translateX(-50%) translateY(-50%);
             background: url('') no-repeat;
             background-size: cover;
             transition: 1s opacity;
         }

    </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{action('HomeController@index')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Idea Management</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li><!-- end message -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                </ul>

                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{('admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">@if (Auth::guest())
                                    Guest
                                @else

                                    {{ Auth::user()->name }}


                                @endif</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                <p>
                                    @if (Auth::guest())
                                        Guest
                                    @else

                                        {{ Auth::user()->name }}


                                    @endif
                                    <small>Member since Nov. 2015</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="editprofile" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/"  class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

        <!-- Main content -->
    <video autoplay  poster="" id="bgvid" loop>
        <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->

        <source src="images/background video/1.mp4" type="video/mp4">
    </video>


    <div id="polina">
        @yield('CONTENT')
    </div>



        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

<footer >

    <div class="copyright text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>PDM Project Idea management System</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Section -->
</footer>



</div><!-- ./wrapper -->
@section('JS_REF')
        <!-- jQuery 2.1.4 -->
<script src="{{asset('/admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/admin/plugins/fastclick/fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/admin/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/admin/dist/js/demo.js')}}"></script>
@show
</body>
</html>
