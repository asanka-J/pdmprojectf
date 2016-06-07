@extends('pages.adminMasterPage')
<link rel="stylesheet" href="css/comment/stylecomment.css">


@section('CONTENT')




<div class="modal-body">

    <div class="comments-container">
        <ul id="comments-list" class="comments-list">


            @foreach ($Comments=App\Comment::where('postID',31)->get() as $comment)



            <!-----------------------------------------------Main comment----------------------------------------------------------->
            <li>

                <!-- Reply comment  -->
                <ul class="comments-list reply-list">
                    <li>
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>

                        <div class="comment-box">
                            <div class="comment-head">

                                <h6 class="comment-name"><a href="http://creaticode.com/blog">{{App\User::where('id',$comment->user_id)->pluck('name')}}</a></h6>
                                <span> {{$comment->created_at}}</span>

                            </div>
                            <div class="comment-content">
                                {{$comment->comment}}
                            </div>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                            <i class="glyphicon glyphicon-flag"></i>
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

                        {{--<form action="{{ route('addcomment') }}" method="post" class="form-horizontal" role="addcomment">--}}
                        <form>

                            <input type="text" class="form-control"  name="comment1" placeholder="Enter Comment here">
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
@stop