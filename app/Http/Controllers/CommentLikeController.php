<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Commentlike;
use App\Comment;
use DB;
use Illuminate\Support\Facades\Redirect;

class CommentLikeController extends Controller
{
  public function addCommentLike(Request $request) {


      $postId1 = $request->input('cpostIDD');
        $commentId1 = $request->input('ccommentIDD');
      $userId1 = $request->input('cUserIDD');


      $datelike=commentLike::where('commentID',1)->where('user_id',12)->first();
      $datelike1= $datelike->pluck('noOfLikes');
      $datedislike1= $datelike->pluck('noOfDisLikes');


      $d = Comment::all();

          if($datelike1[0]==0 && $datedislike1[0]==0){


              Comment::where('commentId',1)->Increment('noOfLikes');
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


          Comment::where('commentId',1)->Increment('noOfLikes');
          Comment::where('commentId',1)->Decrement('noOfDisLikes');

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
      public function addCommentdisLike(Request $request) {

          $postId1 = $request->input('cpostIDD');
            $commentId1 = $request->input('ccommentIDD');
          $userId1 = $request->input('cUserIDD');


                $datedislike=commentLike::where('commentID',1)->where('user_id',12)->first();
                $datelike1= $datedislike->pluck('noOfLikes');
                $datedislike1= $datedislike->pluck('noOfDisLikes');


                $d = Comment::all();


              if($datelike1[0]==1 && $datedislike1[0]==1){

                  $datedislike->noOfLikes = 0;
                  $datedislike->noOfDisLikes=0;

                  $datedislike->save();
                  return Redirect::to('viewpost');

              }


              if($datedislike1[0]==0 && $datelike1[0]==0 ){



                  Comment::where('commentId',1)->Increment('noOfDisLikes');


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




                    Comment::where('commentId',1)->Increment('noOfDisLikes');
                      Comment::where('commentId',1)->Decrement('noOfLikes');

                  return Redirect::to('viewpost');

              }


      }




}
