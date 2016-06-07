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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
	.wrapper {
  background-color:black;
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
            <span class="logo-mini"><b>A</b>LT</span>
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

                        <ul class="dropdown-menu">

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">

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



    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>@if (Auth::guest())
                            Guest
                        @else

                            {{ Auth::user()->name }}


                        @endif</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form" action="search">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search for posts">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>

            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>



                <li>  <a href="Submission">   <i class="fa fa-envelope"></i> <span>Add a New Submission</span></a></li>
                <li>  <a href="editprofile">   <i class="fa fa-envelope"></i> <span>My Profile</span></a></li>
                <li>  <a href="#">   <i class="fa fa-envelope"></i> <span>About</span></a></li>
                <li>  <a href="search">   <i class="fa fa-envelope"></i> <span>Search</span></a></li>
                <li>  <a href="ad_post">   <i class="fa fa-envelope"></i> <span>Admin -View Posts</span></a></li>
                <li>  <a href="ad_user">   <i class="fa fa-envelope"></i> <span>Admin -View Users</span></a></li>








            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('CONTENT_HEADER')
                {{--customizable header part--}}

        </section>

        <!-- Main content -->
        <section class="content">
            @yield('CONTENT')






            <div class="chatAdd">



                    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

                    <style>
                        #chatMessages{ width: 100%; border: 1px solid #ddd; min-height: 100px; list-style: none; padding-left: 0px; height: 400px; overflow-y: auto;}
                        #chatMessages li { width: 100%; padding: 10px;}

                        li.message.system span.who { color: red; }
                        li.message.user span.who   { color: blue; }
                        li.message.mine span.who   { font-weight: bold; }

                        .chat-container{

                            bottom: 0;
                            font-size: 12px;
                            right: 24px;
                            position: fixed;
                            width: 300px;

                        }
                    </style>

                    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
                    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



                    <div class="chat-container">

                        <div class="row">



                            <div class="panel panel-default">

                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Online Support</button>

                                <div id="demo"  class="panel-collapse collapse">





                                    <div class="panel-body" id="chat">

                                        <div style="display:table; width: 100%; margin-bottom: 5px;">

						<span style="display:table-cell; width: 100px;">
							Your name:
						</span>

                                            <input style="display:table-cell; width: 100%;"
                                                   type="text"
                                                   v-model="userName"

                                                    />
                                        </div>


                                        <ul id="chatMessages">

                                            <li v-for="message in messages" class="message" :class="message.class">
                                                <span class="who">@{{ message.who }}: </span>@{{ message.msg }}
                                            </li>

                                        </ul>


                                        <div style="display:table; width: 100%;">

						<span style="display:table-cell; width: 100px;">
							Say something:
						</span>

                                            <input style="display:table-cell; width: 100%;"
                                                   type="text"
                                                   v-model="newMessage"
                                                   @keyup.enter="sendMessage"/>
                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>

                        <!-- Latest Vue JS CDN -->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js"></script>

                        <script>

                            var vue = new Vue({
                                el: '#chat',
                                data : {
                                    messages: [],
                                    newMessage: "",
                                    userName: "{{ Auth::user()->name }}",
                                    port: "{{ 9090 }}",
                                    uri: "{{ explode(':', str_replace('http://', '', str_replace('https://', '', App::make('url')->to('/'))))[0] }}",
                                    conn: false,
                                },
                                ready : function(){

                                    // default port
                                    this.port = this.port.length == 0 ? '9090' : this.port;

                                    // init connection
                                    this.conn = new WebSocket('ws://'+this.uri+':'+this.port);

                                    var me = this;

                                    this.conn.onclose = function (event) {

                                        var reason;

                                        if (event.code == 1000)
                                            reason = "Normal closure, meaning that the purpose for which the connection was established has been fulfilled.";

                                        else if(event.code == 1001)
                                            reason = "An endpoint is \"going away\", such as a server going down or a browser having navigated away from a page.";

                                        else if(event.code == 1002)
                                            reason = "An endpoint is terminating the connection due to a protocol error";

                                        else if(event.code == 1003)
                                            reason = "An endpoint is terminating the connection because it has received a type of data it cannot accept (e.g., an endpoint that understands only text data MAY send this if it receives a binary message).";

                                        else if(event.code == 1004)
                                            reason = "Reserved. The specific meaning might be defined in the future.";

                                        else if(event.code == 1005)
                                            reason = "No status code was actually present.";

                                        else if(event.code == 1006)
                                            reason = "Abnormal error, e.g., without sending or receiving a Close control frame";

                                        else if(event.code == 1007)
                                            reason = "An endpoint is terminating the connection because it has received data within a message that was not consistent with the type of the message (e.g., non-UTF-8 [http://tools.ietf.org/html/rfc3629] data within a text message).";

                                        else if(event.code == 1008)
                                            reason = "An endpoint is terminating the connection because it has received a message that \"violates its policy\". This reason is given either if there is no other sutible reason, or if there is a need to hide specific details about the policy.";

                                        else if(event.code == 1009)
                                            reason = "An endpoint is terminating the connection because it has received a message that is too big for it to process.";

                                        else if(event.code == 1010) // Note that this status code is not used by the server, because it can fail the WebSocket handshake instead.
                                            reason = "An endpoint (client) is terminating the connection because it has expected the server to negotiate one or more extension, but the server didn't return them in the response message of the WebSocket handshake. <br /> Specifically, the extensions that are needed are: " + event.reason;

                                        else if(event.code == 1011)
                                            reason = "A server is terminating the connection because it encountered an unexpected condition that prevented it from fulfilling the request.";

                                        else if(event.code == 1015)
                                            reason = "The connection was closed due to a failure to perform a TLS handshake (e.g., the server certificate can't be verified).";
                                        else
                                            reason = "Unknown reason";

                                        me.addSystemMessage("Connection closed: " + reason);
                                    };

                                    this.conn.onopen = function(event) {
                                        me.addSystemMessage("Connection established! Be cool...");
                                        this.conn.send(this.userName+":Hi! I'm now connected");
                                    }.bind(this);

                                    this.conn.onmessage = function(event) {
                                        me.addServerMessage(event.data);
                                    };
                                },
                                methods : {
                                    addSystemMessage : function(message){
                                        this.addMessage({
                                            "msg" 	: message,
                                            "class"	: "system",
                                            "who"	: "System"
                                        });
                                    },
                                    addServerMessage : function(message){
                                        this.addMessage({
                                            "msg" 	: message.split(':')[1].trim(),
                                            "class"	: "user",
                                            "who"	: message.split(':')[0].trim()
                                        });
                                    },
                                    addMeAmessage : function(message){
                                        this.addMessage({
                                            "msg" 	: message,
                                            "class"	: "mine",
                                            "who"	: "Me"
                                        });
                                    },
                                    addMessage : function(message) {

                                        this.messages.push(message);

                                        // allow the DOM to get updated
                                        Vue.nextTick(function () {
                                            this.scrollMessagesDown();
                                        }.bind(this));
                                    },
                                    scrollMessagesDown : function(){
                                        var chatMessages = document.getElementById('chatMessages');
                                        chatMessages.scrollTop = 1000000;
                                    },
                                    sendMessage : function() {

                                        if (!this.newMessage.length)
                                            return;

                                        var msgToSend = this.userName+":"+ this.newMessage;

                                        this.conn.send(msgToSend);

                                        this.addMeAmessage(this.newMessage);

                                        this.newMessage = "";
                                    },
                                    focusMe : function(event) {
                                        event.target.select();
                                    }
                                }
                            });
                        </script>


                    </div>

        </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <!-- Start Copyright Section -->
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
