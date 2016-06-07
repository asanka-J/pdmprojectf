<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class submissionController extends Controller
{
    public function submitSubmission(Request $request){
        //Retrieve the name input field
        $title = $request->input(title);

        echo 'title: '.title;
        echo '<br>';

        //Retrieve the username input field
        $contents = $request->input(contents);
        echo 'Username: '.$contents;
        echo '<br>';

        //Retrieve the password input field
        $category = $request->input(category);
        echo 'Password: '.$category;
    }
}
