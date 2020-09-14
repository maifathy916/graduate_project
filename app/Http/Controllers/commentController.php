<?php

namespace App\Http\Controllers;
use App\comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class commentController extends Controller
{
    //

    public function addcomment(Request $request){
        $nameImages=[];
        $comment =new comment();
        $comment->bodycomment=$request->input('commentbody');
        $comment->id_user_comment=auth()->user()->id;
        $comment->id_post=$request->input('postid');

        if($request->hasFile('imagescomment')){
            $files=$request->file('imagescomment');
            foreach ($files as $file){
                $filename=$file->getClientOriginalName();
                $filename=time().'.'.$filename;
                $file->move('publicimages/',$filename);
                array_push($nameImages,$filename);
            }
            $comment->imagecomment=implode(',',$nameImages);
        }

        $comment->save();
       /* $allpost= DB::table('users')->join('posts','posts.id_user','=','users.id')->select('users.*','posts.*')->paginate(3);
        $allcomment= DB::table('comments')
            ->join('posts','posts.id','=','comments.id_post')
            ->where('posts.id','=','comments.id_post')
            ->join('users','comments.id_user','=','users.id')
            ->select('users.*','comments.*','posts.*')->get();
        $numcomment=count($allcomment);
        return view('/ask',compact('allcomment','allpost','numcomment'));*/
        return redirect()->back();
    }
    public function  showdatacomment($id){
        $allpost= DB::table('users')->join('posts','posts.id_user_post','=','users.id')->select('users.*','posts.*')->paginate(3);
        $allcomment= DB::table('comments')
            ->join('posts','posts.id','=','comments.id_post')
            ->join('users','comments.id_user_comment','=','users.id')
            ->where('comments.id_post','=',$id)
            ->select("comments.*","comments.id as idcom",'users.*','posts.*')->get();
        $numcomment=count($allcomment);

        return view('/ask',compact('allcomment','allpost','numcomment',"id"));
    }
    public function  readData(){
        $allcomment= DB::table('comments')->join('posts','comments.id_post','=','posts.id')->join('users','comments.id_user_comment','users.id')->
        select('comments.*','user.*','posts.*')->get();
        return response($allcomment);
    }

    public function updatecomment(Request $request){
        $comment=comment::find($request->input('id'));
         if($comment){
        $comment->bodycomment=$request->input("commentbodyedit");
        $comment->save();
         }
       
         return redirect()->back();
       
    }

    public function deletecomment(Request $request){
        $post= comment::find($request->input('id'));
        $post->delete();
       
         return redirect()->back();
  } 


  public function archive($id){
    $allpost= DB::table('users')->join('posts','posts.id_user_post','=','users.id')->where("posts.id_user_post",$id)->select('users.*','posts.*')->paginate(3);
    $allcomment= DB::table('comments')
        ->join('posts','posts.id','=','comments.id_post')
        ->join('users','comments.id_user_comment','=','users.id')
        ->where('comments.id_user_comment',$id)
        ->select("comments.*","comments.id as idcom",'users.*','posts.*')->get();
    $numcomment=count($allcomment);

    return view('/comment',compact('allcomment','allpost','numcomment'));
  }
}
