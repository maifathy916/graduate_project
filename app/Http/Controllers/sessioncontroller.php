<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
    //
    public function setSession(Request $request,$key ,$elem){
       $request->session()->put($key,$elem);
       echo 'session created ';
    }

    public function  getSession(Request $request,$key){
        if($request->session()->has($key)){
            $request->session()->get($key);
        }

    }

    public function deleteSession(Request $request,$key){
           $request->session()->forget($key);
           echo  'session deleted';
    }

}
