<?php
use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\Auth;
$botman = resolve('botman');

/*$botman->hears('Hi|hello|.*bonjour.*', function ($bot) {
    $name="";
     if(!Auth::guest())
         $name= Auth::guard()->user()->fristname;
    $bot->reply('Hello '.$name);

});*/
$botman->hears('what', function ($bot) {
    $bot->reply('kerols!');
    
});

$botman->fallback(function($bot){
    $bot->reply('sorry , i cant understand you');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
