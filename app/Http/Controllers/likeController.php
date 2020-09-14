<?php

namespace App\Http\Controllers;

use App\like;
use Illuminate\Http\Request;

class likeController extends Controller
{
    //
    public  function  createLike(Request $request){
          $like= new like();
          $like->id_post=$request->input('id_post');
          $like->id_user=auth()->user()->id;
          $like->like=$request->input('status_like');
             
          $like->save();

          return response($like);
    }
}
