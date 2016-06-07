<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;


use DB;
use App\Post;
use App\Comment;
use App\Http\Requests;


class CommentController extends Controller
{


    public function addcomment(Request $request) {

        $userid=Auth::user()->id;
        $comment = $request->input('comment1');
        $postid = $request->input('postId');
        $commentadd=new Comment();
        $commentadd->comment=$comment;
        $commentadd->postID=$postid;
        $commentadd->user_id=$userid;



        $commentadd->save();


        $d = Post::paginate(5);
        return view('pages/client/submission',['posts' => $d]);
    }



}
