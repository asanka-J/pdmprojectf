<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
//    public function delete($id) {
//
//        User::find($id)->delete();
//        return redirect('/ad_user');
//    }
    public function delete($id){
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/ad_user')->with(['message' => 'Successfully Deleted!!..']);
    }

    public function update($id) {

        $user = User::find($id);
        $user->status = 'Active';
        $user->update();

        return redirect('/update_user');
    }
//login page
//    public function login(Request $request)
//    {
//        $this->validate($request, [
//            'email' => 'required',
//            'password' => 'required'
//        ]);
//
//        if(Auth::attempt(['email' =>$request['email'], 'password' => $request['password']]))
//        {
//            return redirect()->route('/home');
//        }
//        return redirect()->back();
//    }

    //public function deleteadmin
}