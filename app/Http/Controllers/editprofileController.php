<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class editprofileController extends Controller
{
    //

    public function showprofile(){
        $dataprofile='';
        if(!(Auth::guest())) {
            $dataprofile = user::where('id', auth()->user()->id)->get();
            return view('editprofile')->with('dataprofile', $dataprofile);
        }else {
            return view('editprofile')->with('dataprofile', $dataprofile);
        }
    }

    public function updateprofile(Request $request){
        $dataprofile = user::where('id', auth()->user()->id)->get();
        foreach ($dataprofile as $edit){
            $password=$edit->password;
        }
        $this->validate($request, [
            'oldpassword' => 'required',

        ]);

        if (!(Hash::check($request->oldpassword, $password))) {
            return view('editprofile',compact('dataprofile'))->with('wrong','old password not match');

        }
        else {

                $namefile=$edit->image;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $exetantion = $file->getClientOriginalName();
                $namefile = time() .'.'.$exetantion;
                $file->move(  'publicimages/',$namefile);

            }
                user::where('id', auth()->user()->id)->update([
                    'fristname' => $request->input('fname'),
                    'lastname' => $request->input('lname'),
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('newpassword')),
                    'brithdate' => $request->input('brithdate'),
                    'phone' => $request->input('phone'),
                     'image'=> $namefile

                ]);
                return view("/home");

        }
    }
}
