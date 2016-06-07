@extends('pages.adminMasterPage')

@section('CONTENT')


    <head><!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/comment/stylecomment.css">

        <style>
            span.hidden {
                display: none;
            }
        </style>



    </head>
    <div class="row">
    <div class="col-lg-10">

        <form action="{{ route('postsearch') }}" method="post" class="form-horizontal" role="search">
        <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Category <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li> <a href="{{ url('viewpost') }}" >All Posts <span name="all" class="badge">{{ App\Post::count() }}</span></a></li>
                    <li>@foreach (App\Category::all() as $Category)
                            <?php echo "<span class='hidden' name='cato'>".$Category->id."</span>"?>
                            <a href="{{ url('viewpost', ['id'=>$Category->id] ) }}" >{{ $Category->name }} <span class="badge">{{ $Category->posts->count() }}</span></a>
                        @endforeach</li>
                </ul>
            </div><!-- /btn-group -->

            <input type="text" class="form-control"  name="search" placeholder="Search for...">
      <span class="input-group-btn">
           <input type="hidden" value="{{Session::token()}}" name="_token">
        <button type="submit" class="btn btn-default" ><i class="glyphicon glyphicon-search" ></i></button>
      </span>

        </div><!-- /input-group -->
        </form>
    </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->


<hr><hr><hr><hr><hr><hr><hr><hr>



    @foreach ($posts as $post)

        <div class="col-lg-8" style="margin-left:15%; width: 100%;">
        <h1 style="color: #ec971f ; margin-left:20%;">{{$post->title}}</h1>
        <!-- Author -->
        <p class="lead" style=" margin-left:20%;">
            by <a href="#">{{$post->name}}</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
        <hr>
        <p>{{$post->description}}</p>





            <!-- **************************************************************************************************************************************** -->
            <section>
                <div class="container">
                    <div class="box-likes">
                        <div class="row">

                            <span><a href="#">{{$post->noOfLikes}}</a></span>
                            <span>Like this</span>
                            <span><a href="#">     {{$post->noOfDisLikes}}</a></span>
                            <span>DisLiked this</span>
                        </div>
                        <div class="row">
                            <span></span>
                        </div>
                    </div>

                    <div class="btn-group" role="group" aria-label="...">
                      <button type="button" class="btn btn-default">Left</button>

                      <button type="button" class="btn btn-default">Middle</button>
                      <button type="button" class="btn btn-default">Right</button>
                </div>
                    <div class="box-buttons">
                        <div class="row">
                            <form action="{{ route('likedpost') }}" method="post" class="form-horizontal" role="likes">
                                <div class="input-group">
                                    <span class='hidden' name='postIDD'>{{$post->id}}</span>
                                    <span class='hidden' name='UserIDD'>{{ Auth::user()->id}}</span>


                                          <span class="input-group-btn">

                                              <input type="hidden" value="{{Session::token()}}" name="_token">
                                            <button type="submit" class="btn btn-default" ><span class="fa fa-thumbs-up"></span></button>


                                          </span>

                                </div><!-- /input-group -->



                            </form>
                            <form action="{{ route('dislikedpost') }}" method="post" class="form-horizontal" role="likes">
                                <div class="input-group">
                                    <span class='hidden' name='postId'>{{$post->id}}</span>
                                    <span class='hidden' name='UserId'>{{ Auth::user()->id}}</span>


                                          <span class="input-group-btn">

                                                  <input type="hidden" value="{{Session::token()}}" name="_token">

                                                  <button type="submit" class="btn btn-default" ><span class="fa fa-thumbs-down"></span></button>

                                              </span>

                                    </div><!-- /input-group -->
                                </form>

                                <button><span class="ion-chatbox-working"></span></button>
                                <button><span class="ion-share"></span></button>
                            </div>
                        </div>
                    </div>

                </section>


                <!-- ---------------------------------------------------------------------------------------------------------------- -->
                <!-- Avatar -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#popup"><i class="ion-chatbox-working"></i> View more comments</button>
            <button type="button" onclick="window.location='{{ url("comment/{$post->id}") }}'">Button</button>


                <!-- Modal -->

    <!--            <div class="modal fade" id="popup" role="dialog"> -->

                    <div class="modal-dialog modal-lg">

                        <div class="modal-content">
                            <!-- <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">
                                    <div class="col-sm-3">
                                        <img src="" height="85" width="85">
                                    </div>


                                    <h3><a href="#">{{$post->title}}</a></h3>
                                <p>{{$post->description}}</p>

                            </h3>

                        </div> -->

                        <div class="modal-body">

                            <div class="comments-container">
                                <ul id="comments-list" class="comments-list">


                                @foreach ($Comments=App\Comment::where('postID',$post->id)->get() as $comment)
                            <?php echo "<span class='hidden' name='cato'>".$Category->id."</span>"?><!--hiddent content-->


                           <!-----------------------------------------------Main comment----------------------------------------------------------->
                                    <li>

                                            <!-- Reply comment  -->
                                            <ul class="comments-list reply-list">
                                                <li>
                                                    <!-- Avatar -->
                                                    <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>

                                                    <div class="comment-box">
                                                        <div class="comment-head">

                                                            <h6 class="comment-name"><a href="http://creaticode.com/blog">
                                                              {{App\User::where('id',$comment->user_id)->pluck('name')}}</a></h6>
                                                              <hr>
                                                            <span> {{$comment->created_at}}</span>

                                                        </div>
                                                        <div class="comment-content">
                                                            {{$comment->comment}}
                                                        </div>

                                                      <!-- *****************************************comment like and dislike********************************************************************************* -->
                                                        <section>
                                                            <div class="container">
                                                                <div class="box-likes">
                                                                    <div class="row">

                                                                        <span><a href="#">{{$comment->noOfLikes}}</a></span>
                                                                        <span>Like this</span>
                                                                        <span><a href="#">     {{$comment->noOfDisLikes}}</a></span>
                                                                        <span>DisLiked this</span>
                                                                    </div>
                                                                    <div class="row">
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="box-buttons">
                                                                    <div class="row">



                                                                        <form action="{{ route('likedcomment') }}" method="post" class="form-horizontal" role="likes">
                                                                            <div class="input-group">
                                                                                <span class='hidden' name='cpostIDD'>{{$post->id}}</span>
                                                                                <span class='hidden' name='ccommentIDD'>{{$comment->id}}</span>
                                                                                <span class='hidden' name='cUserIDD'>{{ Auth::user()->id}}</span>


                                                                                      <span class="input-group-btn">

                                                                                          <input type="hidden" value="{{Session::token()}}" name="_token">
                                                                                        <button type="submit" class="btn btn-default" ><span class="fa fa-thumbs-up"></span></button>


                                                                                      </span>

                                                                            </div><!-- /input-group -->
                                                                        </form>
                                                                        <form action="{{ route('dislikedcomment') }}" method="post" class="form-horizontal" role="likes">
                                                                            <div class="input-group">
                                                                                <span class='hidden' name='cpostId'>{{$post->id}}</span>
                                                                                <span class='hidden' name='ccommentId'>{{$comment->id}}</span>
                                                                                <span class='hidden' name='cUserId'>{{ Auth::user()->id}}</span>


                                                                                      <span class="input-group-btn">

                                                                                              <input type="hidden" value="{{Session::token()}}" name="_token">

                                                                                              <button type="submit" class="btn btn-default" ><span class="fa fa-thumbs-down"></span></button>

                                                                                          </span>

                                                                                </div><!-- /input-group -->
                                                                            </form>

                                                                            <button><span class="ion-chatbox-working"></span></button>
                                                                            <button><span class="ion-share"></span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </section>




                                                            <!-- ---------------------------------------------------------------------------------------------------------------- -->

                                                    </div>
                                                </li>

                                            </ul>

                                    </li>
                            @endforeach


                            <li>
                                    <li>
                                        <!-- MY comment here -->
                                        <div class="comment-avatar"><img src="https://www.tm-town.com/assets/default_male600x600-79218392a28f78af249216e097aaf683.png" alt=""></div>

                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name"><a href="http://creaticode.com/blog">{{ Auth::user()->name}}</a></h6>

                                            </div>
                                            <div class="comment-content">



                                                <form action="{{ route('addcomment') }}" method="post" class="form-horizontal" role="addcomment">


                                                        <input type="text" class="form-control"  name="comment1"  placeholder="Enter Comment here">

                                                    <input type="text" class="hidden"  name="postId" value="{{$post->id}}"  placeholder="Enter Comment here">
                                                              <span class="input-group-btn">

                                                                   <input type="hidden" value="{{Session::token()}}" name="_token">
                                                                 <button type="submit" class="btn btn-primary"><i class="icon-user icon-white"></i> Comment</button>
                                                                                                                     </span>

                                                </form>

                                            </div>
                                        </div>
                                    </li>
                            </li>



                                </ul>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
          <!--  </div>-->


            <!-------------------------------------------------------------------------------------------------------------------->



        </div>

            @endforeach<!--post -->







    <div class="col-lg-8">
    <nav>
        {!! $posts->appends( Request::query() )->render() !!}
    </nav>
</div>




@endsection
