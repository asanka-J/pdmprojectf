<?php
namespace App\Http\Controllers;
use App\Http\Requests;
//use Guzzle\Tests\Plugin\Redirect;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Redirect;
use DB;

class ImageController extends Controller
{
    /**
     * Show the form for uploading a new resource.
     *
     * @return Response
     */
    public function upload()
    {
        return view('imageUpload');
    }
    /**
     * Store a newly uploaded resource in storage.
     *
     * @return Response
     */
	 
	


      // Store records process
        public function store(Request $request)
        {
            $image = new Image();
            $this->validate($request, [
                'title' => 'required',
                
            ]);
            $image->title = $request->title;
            $image->description = $request->description;
            $image->category = $request->category;

            if($request->hasFile('image')) {
                $file = Input::file('image');
                //getting timestamp
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

                $name = $timestamp. '-' .$file->getClientOriginalName();

                $image->image = $name;

                $file->move(public_path().'/images/', $name);
            }
            $image->save();
            //return $this->create()->with('success', 'Image Uploaded Successfully');
            return Redirect::to('imageUpload');
        }

		public function show()
		{
			return view('show');
		}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
	public function display()
	{
	
	$data1 = DB::table('images')->get();
	return View('show',['data1'=> $data1]);
	}
	/**
	like the posters from the view form
	*/
    
}
