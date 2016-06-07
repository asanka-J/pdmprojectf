<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use App\Post;
use App\Http\Requests;
class PostController extends Controller
{

    public function search(Request $request) {

        $search = $request->input('search');
        $cat_id = $request->input('cato');

        if($cat_id!=""){
            $d = Post::where('title','like','%'.$search.'%'&&'category_id'==$cat_id)
                ->orderBy('name')
                ->paginate(5);
        }

        else {
            $d = Post::where('title', 'like', '%' . $search . '%')
                ->orderBy('name')
                ->paginate(5);
        }

        return view('pages/client/submission',['posts' => $d]);
    }

    public function postCreatePost()
    {
        // create the validation rules ------------------------
        $rules = array(
            'body'             => 'required|max:1000'                        // just a normal required validation
                // required and has to match the password field
        );
        // do the validation ----------------------------------
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);
        // check if the validator failed -----------------------
        if ($validator->fails()) {
            // get the error messages from the validator
            $messages = $validator->messages();
            // redirect our user back to the form with the errors from the validator
            return Redirect::to('submit')
                ->withErrors($validator);
        } else {
            // validation successful ---------------------------
            // our inputs has passed all tests!
            // let him enter the database
            $values=array('content'=>Input::get('body'),'member_name'=>auth()->user()->name,'posted_date'=>date('d/m/y'));




            // create the data for our ProfileTable
			DB::table('post')->insert($values);

                return Redirect::to('submit');

        }
    }

    public function delete($post_id) {

        Post::find($post_id)->delete();
        return redirect('/delete_post');
    }

//    public function update($id) {
//
//        $post =Post::find($id);
//        $post->status = 'Active';
//        $post->update();
//
//        return redirect('/update_post');
//    }
}