<?php

namespace App\Http\Controllers;

use App\post;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    //



      public function index(){
        $allpost= DB::table('users')->join('posts','posts.id_user_post','=','users.id')->select('users.*','posts.*')->paginate(3);
        $allcomment= DB::table('comments')
            ->join('posts','posts.id','=','comments.id_post')
            ->join('users','comments.id_user_comment','=','users.id')
            ->select("comments.*","comments.id as idcom",'users.*','posts.*')->get();
        $numcomment=count($allcomment);

        return view('/ask',compact('allcomment','allpost','numcomment'));
      }
  public function savepost(Request $request){
         $nameImages=[];
        $post =new post();
        $post->body=$request->input('postbody');
        $post->id_user_post=auth()->user()->id;

        if($request->hasFile('image')){
            $files=$request->file('image');
            foreach ($files as $file){
                 $filename=$file->getClientOriginalName();
                 $filename=time().'.'.$filename;
                 $file->move('publicimages/',$filename);
                 array_push($nameImages,$filename);
            }
            $post->imagepost=implode(',',$nameImages);
        }

       $post->save();
      /* $comment=DB::table('comments')->select('comments.*')->get();
       $numcomment =count($comment);
       $allpost= DB::table('users')->join('posts','posts.id_user','users.id')->select('users.*','posts.*')->paginate(3);
        return view('/ask',compact('allpost','numcomment'));*/
        return redirect()->back();
    }

    public function readData(){
          $allPost= DB::table('users')->join('posts','posts.id_user_post','users.id')->select('users.*','posts.*')->get();
          return response($allPost);
    }

    

    public function updatepost(Request $request){
        $post=post::find($request->input('id'));
         if($post){
        $post->body=$request->input("postbodyedit");
        $post->save();
         }
       /* $comment=DB::table('comments')->select('comments.*')->get();
        $numcomment =count($comment);
        $allpost= DB::table('users')->join('posts','posts.id_user','users.id')->select('users.*','posts.*')->paginate(3);
         return view('/ask',compact('allpost','numcomment'));*/
         return redirect()->back();
       
    }
    public function deletepost(Request $request){
          $post= post::find($request->input('id'));
          $post->delete();
         
           return redirect()->back();
    } 

}
