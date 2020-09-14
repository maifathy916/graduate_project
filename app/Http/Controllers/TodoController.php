<?php

namespace App\Http\Controllers;

use App\Conversations\finishPulpitisOptionConversion;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Conversations\optionConversation;
use App\Conversations\PulpitisOptionConversion;
use App\Conversations\startOptionConversion;

class TodoController extends Controller
{
    //
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
           
        $botman->hears('Hi|hello|.*bonjour.*', function ($bot) {
            $name="";
             if(!Auth::guest())
                 $name= Auth::guard()->user()->fristname;
            $bot->reply('Hello '.$name);
            $this->startconversition($bot);
        
        });
        $botman->listen();
    }


       public function startconversition(BotMan $bot){
            $bot->startConversation(new startOptionConversion());
       }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('welcome');
    }
}
