<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Postlike;
use App\Post;
use DB;
use Illuminate\Support\Facades\Redirect;

class PostlikeController extends Controller
{

//asanka like/comments

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addPostLike(Request $request) {


        $postId1 = $request->input('postIDD');
        $userId1 = $request->input('UserIDD');


        $datelike=postLike::where('postId',31)->where('user_id',12)->first();
        $datelike1= $datelike->pluck('noOfLikes');
        $datedislike1= $datelike->pluck('noOfDisLikes');


        $d = Post::all();

            if($datelike1[0]==0 && $datedislike1[0]==0){


                Post::where('id',31)->Increment('noOfLikes');
                $datelike->noOfLikes = 1;
                $datelike->save();

//                return view('pages/client/submission',['posts' => $d]);
                //return redirect()->route('viewpost');
                return Redirect::to('viewpost');
            }

        if($datelike1[0]==1 && $datedislike1[0]==1){



            $datelike->noOfLikes = 0;
            $datelike->noOfDisLikes=0;

            $datelike->save();



            return Redirect::to('viewpost');

            }


        if($datelike1[0]==0 && $datedislike1[0]==1){

            $datelike->noOfLikes = 1;
            $datelike->noOfDisLikes=0;

            $datelike->save();


            Post::where('id',31)->Increment('noOfLikes');
            Post::where('id',31)->Decrement('noOfDisLikes');

            return Redirect::to('viewpost');
        }

        if($datelike1[0]==1 && $datedislike1[0]==0){

            return Redirect::to('viewpost');

        }

        if($datelike1[0]==1 || $datedislike1[0]==0 || $datelike1[0]==0 || $datedislike1[0]==1){
            $datelike->noOfLikes = 0;
            $datelike->noOfDisLikes=0;

            $datelike->save();
            return Redirect::to('viewpost');
        }


    }




//dislike controller
    public function addPostdisLike(Request $request) {


        $postId1 = $request->input('postId');
        $userId1 = $request->input('UserId');


        $datedislike=postLike::where('postId',31)->where('user_id',12)->first();
        $datedislike1= $datedislike->pluck('noOfDisLikes');

        $datelike1= $datedislike->pluck('noOfLikes');

        $d = Post::all();

            if($datelike1[0]==1 && $datedislike1[0]==1){

                $datedislike->noOfLikes = 0;
                $datedislike->noOfDisLikes=0;

                $datedislike->save();
                return Redirect::to('viewpost');

            }


            if($datedislike1[0]==0 && $datelike1[0]==0 ){


                Post::where('id',31)->Increment('noOfDisLikes');

                $datedislike->noOfLikes = 0;
                $datedislike->noOfDisLikes=1;

                $datedislike->save();

                return Redirect::to('viewpost');

            }

            if($datedislike1[0]==1 && $datelike1[0]==0 ){

                return Redirect::to('viewpost');
            }

            if($datedislike1[0]==0 && $datelike1[0]==1 ){


                $datedislike->noOfLikes = 0;
                $datedislike->noOfDisLikes=1;

                $datedislike->save();

                Post::where('id',31)->Increment('noOfDisLikes');
                Post::where('id',31)->Decrement('noOfLikes');

                return Redirect::to('viewpost');

            }


    }
}
