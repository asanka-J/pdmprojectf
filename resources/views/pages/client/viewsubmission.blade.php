@extends('pages.adminMasterPage')
@section('styleSheets')



    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



    <link rel="stylesheet" href="css/stylecomment.css">



    @stop

    @section('CONTENT')

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">


            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


            <div class="comments-container">


                <ul id="comments-list" class="comments-list">

                    <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>

                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="">Name of the submission person</a></h6>
                                    <span>Date and time</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    Comment Content
                                </div>
                            </div>



                            <!-- Reply comment  -->
                            <ul class="comments-list reply-list">
                                <li>
                                    <!-- Avatar -->
                                    <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>

                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name"><a href="http://creaticode.com/blog">Sub Commenter</a></h6>
                                            <span> 10 minutos</span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                            <i class="glyphicon glyphicon-flag"></i>
                                        </div>
                                        <div class="comment-content">
                                            Sub Comment 1
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- Avatar -->
                                    <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>

                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name"><a href="http://creaticode.com/blog">Sub Commenter</a></h6>
                                            <span> 10 minutos</span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                            <i class="glyphicon glyphicon-flag"></i>
                                        </div>
                                        <div class="comment-content">
                                            Sub Comment 2
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!-- Avatar -->
                                    <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>

                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name"><a href="http://creaticode.com/blog">Enter Your comment here</a></h6>

                                        </div>
                                        <div class="comment-content">
                                            <form role="form">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="comment" name=subcomment>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>


                            </ul>

                    </li>





                </ul>
            </div>





            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>




    @stop
