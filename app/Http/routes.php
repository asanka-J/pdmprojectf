<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']],function(){



	Route::get('login', 'WelcomeController@index');
    Route::get('home', 'HomeController@index');
    Route::get('/', function(){
		Auth::logout();
		return view('auth.login');
	});




    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

    Route::get('/ad_post', ['middleware' => 'auth', function() {
        $p = App\Post::all();

        return view('pages/admin/ad_viewPosts',['post' => $p]);
    }]);
//delete user
    Route::get('/ad_user', ['middleware' => 'auth', function() {
        $d = App\User::all();
        return view('pages/admin/ad_viewUsers',['users' => $d]);
    }]);
//update user
    Route::get('/update_user', ['middleware' => 'auth', function() {
        $d = App\User::all();
        return view('pages/admin/ad_viewUsers',['users' => $d]);
    }]);

    Route::get('User/{id}/delete', [
            'uses'=>'UserController@delete',
        'as'=>'delete_profile',
        'middleware' => 'auth'
    ]);

//pavithra

    Route::get('search', function(){

        $data =  DB::table('post')->get();
        return view('pages.client.search', compact('data'));
    });

    Route::post('view_blog', function(){
        $input = Request::all();
        $c =  DB::table('post')->where('id', $input['ID'])->first();
        return view('pages.client.blog', compact('c'));
    });


    Route::get('test', function(){
        return view('pages.test');
    });
//isuru


     Route::get('editprofile',['as' => 'editprofile', 'uses' => 'ProfileController@getProfile']);
    Route::post('/update_profile', [
        'uses'=>'ProfileController@update',
        'as'=>'update_profile'
    ]);

    Route::post('/about_me', [
        'uses'=>'ProfileController@aboutMe',
        'as'=>'about_me'
    ]);


    Route::get('viewprofile', function(){
        return View('viewprofile');

    });

    Route::post('upload','ProfileController@upload');

    Route::get('/userimage/{filename}', [
        'uses' => 'ProfileController@getUserImage',
        'as' => 'account.image'
    ]);

    Route::get('aa',function(){
        return view('\pages\admin\adminHome');

    });


//branavi


/*
//branavi




    /*Route::get('register', array('uses'=>'TestController@create'));*/
	Route::get('submit', function () {
        return view('/pages/client/submit');


    });

    Route::post('/createpost', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'post.create',

    ]);

//delete post



/*
    Route::get('User/{id}/update', 'UserController@update');

    Route::get('Post/{id}/delete_post', 'PostController@delete');

    Route::get('/delete_post', ['middleware' => 'auth', function() {
        $d = App\Post::all();
        return view('pages/admin/ad_viewPosts',['post' => $d]);
    }]);

    //update post


});
*/


//Branavi
//text submission
/*
Route::get('submit', function () {
	return view('/pages/client/submit');
});
Route::post('/createpost', [
	'uses' => 'PostController@postCreatePost',
	'as' => 'post.create',
]);*/

// branavi upload images
Route::post('Submission', 'ImageController@store' );
Route::get('Submission', function () {
	return view('/pages/client/imageUpload');
});
/*
// branavi vedio upload
Route::post('vedioUpload', 'VideoController@store' );
Route::get('vedioUpload', function () {
	return view('/pages/client/vedioUpload');
});
/*Route::get('submissions', function () {
	return view('/pages/client/submissions');
});*/
/*Route::get('show', function () {
	return view('pages.client.show',compact('data1'));
});*/
//Route::get('/pages/client/show', 'ImageController@display' );

Route::get('show', function(){

        $data =  DB::table('images')->get();
        return view('pages.client.show', compact('data'));
    });



//submit route-asanka
    Route::get('submission', function(){


        return view('pages.client.submission');
    });




    Route::post('/submit',array('uses'=>'submissionController@submitSubmission'));

//isuru submission view




//
//    Route::get('/viewpost/{id?}', ['middleware' => 'auth', function($id=null) {
//        if($id===null){
//            $d = App\Post::all();
//            return view('pages/client/submission',['posts' => $d]);
//        }
//        else{
//            $d = App\Category::find($id)->posts;
//            return view('pages/client/submission',['posts' => $d]);
//        }
//
//    }]);
    //asanka post like



    Route::get('/viewpostt', ['middleware' => 'auth', function() {

            return view('pages/client/submission');


    }]);


    Route::post('/likedpost', [
        'uses'=>'PostlikeController@addPostLike',
        'as'=>'likedpost'
    ]);

    Route::post('/dislikedpost', [
        'uses'=>'PostlikeController@addPostdisLike',
        'as'=>'dislikedpost'
    ]);

		Route::post('/likedcomment', [
				'uses'=>'CommentLikeController@addCommentLike',
				'as'=>'likedcomment'
		]);

		Route::post('/dislikedcomment', [
					'uses'=>'CommentLikeController@addCommentdisLike',
				'as'=>'dislikedcomment'
		]);




//Isuru new after 5.30

Route::get('/viewpost/{id?}', ['middleware' => 'auth', function($id=null) {
    if($id===null){
        $d = App\Post::paginate(5);
        return view('pages/client/submission',['posts' => $d]);
    }
    else{
        $d = App\Post::where('category_id', $id)->paginate(5);
        return view('pages/client/submission',['posts' => $d]);
    }

}]);

Route::post('/postsearch', [
    'uses'=>'PostController@search',
    'as'=>'postsearch'
]);


 //add comment
    Route::post('/addcomment', [
        'uses'=>'CommentController@addcomment',
        'as'=>'addcomment'
    ]);


});
