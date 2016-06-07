<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use DB,Hash,Session;



class ProfileController extends Controller
{

    public function __construct()
    {
        // Assign your current user. Whatever service you're using Sentinel::getUser(),  Sentry::getUser();
        // $this->currentUser = auth()->user();
        // go ahead and share it in your view. Again I abstract this out to an AuthenticatedController,
        // that I extend. Or you could put it in the Auth Middleware.
        // View::share([ 'currentUser' => $this->currentUser ]); # gives it to the view as well
    }
    public function getProfile()
    {

        $id=Auth::user()->id;

        $profileData = DB::table('profile_tables')
            ->join('users', 'users.id', '=', 'profile_tables.id')
            ->where('users.id','=',$id)
            ->first();
        if(!$profileData)
        {
            DB::table('profile_tables')->insert(
                ['id'=>$id,'created_at'=>date('y-m-d H:i:s'),
                    'about_me'   =>  'Please click above About Me to fill details about YOU!',]

            );

            $profileData = DB::table('profile_tables')
                ->join('users', 'users.id', '=', 'profile_tables.id')
                ->where('users.id','=',$id)
                ->first();
        }

        return View('viewprofile',['data'=>$profileData]);

    }
    public function update(Request $request)
    {
        $id=Auth::user()->id;
        // create the validation rules ------------------------
        $this->validate($request, [
            'first_name'             => 'required|alpha',                        // just a normal required validation
            'last_name'             => 'required|alpha',
            'occupation'             => 'required',
            'email'            => 'required|email|unique:users,email,'.$id,     // required and must be unique in the ducks table
            'phone'             =>'required|regex:/^([0-9]+)$/|size:10',
            'address'           =>'required|regex:/^[a-z0-9 .\-\,]+$/i',
            'username'          =>'required|unique:profile_tables,username,'.$id,
            'password'         => 'required:min6',
            'password_confirm' => 'required|same:password',           // required and has to match the password field
            'image'            =>'max:4096|mimes:jpeg,jpg,png'
        ]);

        $user=Auth::user();
        $old_name = $user->first_name;
        $name = $request['first_name'];
        $email = $request['email'];
        $pass=$request['password'];
        if($pass=='ab111a'){
            $password = $user->password;
        }
        else {
            $password = bcrypt($request['password']);
        }


        $query = DB::table('profile_tables')->select('*')->where('id','=', $id);


        $values=array(
            'updated_at'=>date('y-m-d H:i:s'),
            'fname'=>$request['first_name'],
            'lname'=>$request['last_name'],
            'occupation' => $request['occupation'],
            'username' => $request['username'],
            'phone' => $request['phone'],
            'address' => $request['address']
        );

        if($query->count()){
            $user->name=$name;
            $user->email=$email;
            $user->password=$password;
            $user->update();

            DB::table('profile_tables')
                ->where('id',$id)
                ->update($values);
            \Session::flash('flash_message','Successfully updated your profile');


            //Image Upload

            $file = $request['image'];
            $filename = $request['first_name'] . '-' . $user->id . '.jpg';
            $old_filename = $old_name . '-' . $user->id . '.jpg';
            $update = false;
            if (Storage::disk('upload')->has($old_filename)) {
                $old_file = Storage::disk('upload')->get($old_filename);
                Storage::disk('upload')->put($filename, $old_file);
                $update = true;
            }
            if ($file) {
                Storage::disk('upload')->put($filename, File::get($file));
            }
            if ($update && $old_filename !== $filename) {
                Storage::delete($old_filename);
            }

            return Redirect::to('editprofile');

        }

        else {
            DB::table('profile_tables')->insert(
                ['id'=>$id,'created_at'=>date('y-m-d H:i:s'),
                    'fname'=>$request['first_name'],
                    'lname'=>$request['last_name'],
                    'occupation' => $request['occupation'],
                    'username' => $request['username'],
                    'phone' => $request['phone'],
                    'address' => $request['address'],
                    'about_me'   =>  'Please click above About Me to fill details about YOU!',]

            );

            return Redirect::to('editprofile');
        }



    }

    public function aboutMe(Request $request)
    {

        $id=Auth::user()->id;
        // create the validation rules ------------------------
        $this->validate($request, [
            'about_me'             => 'required|size:1600',                        // just a normal required validation

        ]);

        DB::table('profile_tables')
            ->where('id',$id)
            ->update(['about_me' => $request['about_me']]);

        return Redirect::to('editprofile');
    }

    public function getUserImage($filename)
    {

        $file = Storage::disk('upload')->get($filename);
        return new Response($file, 200);
    }


}