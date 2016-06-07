@extends('pages/homeLayout')
@section('styleSheets')
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Idea Management System</title>


		<!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

@stop

@section(('CONTENT'))



	<div class="myclasss">
  <!-- Start Logo Section -->
        <section id="logo-section" class="text-center" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <h1 style="margin-top: -20px">Idea Management System</h1>
                            <span>.</span>
                            <span>.</span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center" style="margin-top: 50px" >
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item blue">
                            <a href="/submit"  data-toggle="modal">
                                <i class="fa fa-magic"></i>
                                <p>View submissions</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="/editprofile" data-toggle="modal">
                                <i class="fa fa-file-photo-o"></i>
                                <p>Profile</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="#about-modal" data-toggle="modal">
                                <i class="fa fa-user"></i>
                                <p>About Us</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" height="100">
                                    <div class="item active">
                                        <img src="images/slider/image-slider-1.jpg"  style="height: 300px"  width="200" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/slider/image-slider-2.jpg"  style="height: 300px" width="200" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/slider/image-slider-3.jpg"  style="height: 300px" width="200" class="img-responsive" alt="">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Start Carousel Section -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="menu-item color responsive">
                                    <a href="/search" data-toggle="modal">
                                        <i class="fa fa-area-chart"></i>
                                        <p>Search a submission</p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="menu-item light-orange responsive-2">
                                    <a href="/Submission" data-toggle="modal">
                                        <i class="fa fa-users"></i>
                                        <p>Post Your submissions</p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item light-red">
                            <a href="#contact-modal" data-toggle="modal">
                                <i class="fa fa-envelope-o"></i>
                                <p>Contact</p>
                            </a>
                        </div>
                        
                        <div class="menu-item color">
                            <a href="#testimonial-modal" data-toggle="modal">
                                <i class="fa fa-comment-o"></i>
                                <p>Testimonial</p>
                            </a>
                        </div>
                        
                        <div class="menu-item blue">
                            <a href="#news-modal" data-toggle="modal">
                                <i class="fa fa-mortar-board"></i>
                                <p>Latest News</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->
        

    



</div>



	@stop