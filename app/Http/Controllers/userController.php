<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\doctor;

class userController extends Controller
{
   


    public function signup(Request $request){
             $user =new user();
         if($this->validation($request)) {
             $data=$request->input();

             $request->session()->put("data",$data);

             $user->fristname = $request->input('fname');
             $user->lastname = $request->input('lname');
             $user->email = $request->input('email');
             $user->password = bcrypt($request->input('password'));
             $user->gender = $request->input('sl-gender');
             $user->brithdate = $request->input('brithdate');
             $user->phone = $request->input('phone');
             if ($request->hasFile('image')) {
                 $file = $request->file('image');
                 $exetantion = $file->getClientOriginalName();
                 $namefile = time() .'.'.$exetantion;
                  $file->move(  'publicimages/',$namefile);
                  $user->image=$namefile;
             } else {
                   return $request;
                   $user->image='';
             }
             if( $user->save()){
                 $this->signin($request);
             }

             return redirect()->route('/');
         }
    }
        public function signin(Request $request){

        $this->validate($request,[

            'email'=>'required',
            'password'=>'required'
        ]);

            if(Auth::attempt(['email'=> $request['email'], 'password'=>$request['password']])){
                  return redirect()->route('/');
            }
          else{

                return redirect()->back()->with('user','sorry email or password is invalid tray again');

            }
        }



          public function validation($rrr){
              $this->validate($rrr,[
                  'fname'=>'required',
                  'lname'=>'required',
                  'email'=>'required|email|unique:users',
                  'password'=>'required|min:6',


              ]);
           return $rrr->all();
        }

        public function logout(){
        Auth::logout();
        session()->forget('data');
         $datadoctor= user::all();
            return redirect()->route('/',compact('datadoctor'));
        }

}
