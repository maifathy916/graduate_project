<?php
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\lang;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('lang/{lang}', function ($lang) {
    
    if(in_array($lang,['ar','en']))
    {
        if(auth()->user())
        {
            $user=auth()->user();
            $user->lang=$lang;
            session()->put('lang',$lang);
            $user->save();
        }
        else
        {
            
            if(session()->has('lang'))
            {
                    session()->forget('lang');
            }
           
            session()->put('lang',$lang);
        }
    }
    else{
        if(auth()->user())
        {
            $user=auth()->user();
            $user->lang=$lang;
            $user->save();
    
        }
        else
        {
            if(session()->has('lang'))
            {
                    session()->forget('lang');
            }
           
        session()->put('lang',en);
    }}
    return redirect()->back();
    });
    

Route::group(['middleware' => 'lang'], function () {
Route::get('/', function () {
    $datadoctor= DB::table('users')->select("*")->where("role","doctor")->orWhere("role","Admin")->paginate(4);
    
    return view('home',compact('datadoctor'));
})->name('/');


Route::get('/comment', function () {
    return view('comment');

});
Route::get('/register', function () {
    return view('register');

});
Route::get('/adddoctor', function () {
    return view('adddoctor');
});

Route::get('/showdoctor', function () {
    return view('doctors');
});

 Route::get('/editprofile', 'editprofileController@showprofile')->name('editprofile');
 Route::post('/editprofile', 'editprofileController@updateprofile')->name('updateprofile');
 Route::post('/registertion', 'userController@signup')->name('registertion');
 Route::post('/loginuser', 'userController@signin')->name('login');
 Route::post('/logindoctor', 'doctorController@signin')->name('login');


Route::post('/adddoctors', 'doctorController@signup')->name('registdoctor');

Route::post('/savepost', 'postController@savepost')->name('saveposts');
Route::get('/readData', 'postController@readData');
Route::get('/readDatacomment', 'commentController@readData');

Route::get('/showalldoctor','doctorController@fetchdoctor')->name("showdoctor");

Route::post('/savecomment', 'commentController@addcomment')->name('savecomments');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'userController@logout')->name('logout');
   Route::get('/ask', 'postController@index')->name('ask');
    Route::get('/createLike', 'likeController@createLike')->name('likes');
   
    Route::get('/archive/{id}', 'commentController@archive')->name('archive');

    Route::match(['get', 'post'], '/botman', 'TodoController@handle');
Route::get('/botdoctor/chat', 'TodoController@tinker')->name("chatbot");

});


Route::post('/updatedoctor','doctorController@updatedoctor')->name("updatedoctor");
Route::get('/deletedoctor/{id}','doctorController@deletedoctor')->name("deletedoctor");
Route::post('/updatedpost', 'postController@updatepost')->name("updatedpost");
Route::post('/deletedpost', 'postController@deletepost')->name("deletepost");
Route::post('/updatedcomment', 'commentController@updatecomment')->name("updatecomment");
Route::post('/deletedcomment', 'commentController@deletecomment')->name("deletecomment");
Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/w', function(){
    return view('welcome');
});


Route::get('/treatments', function(){
    return view('treatments');
})->name("treat");

});

