<?php

namespace App\Http\Controllers;
use DB;

Class UserController extends Controllers
{
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required|unique:seeders|max:255',
            'email'=>'required`enter code here`',
            'password'=>'required',
        ]);

        $seeder=new Seeders();
        $seeder->name=$request->input('name');
        $seeder->email=$request->input('email');
        $seeder->password=$request->input('password');
        $seeder->save();
        $request->session()->flash('alert-success', 'User was successful added!');

        return redirect()->route('/welcome');
    } // save data

}