<?php

namespace App\Conversations;
use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Facades\DB;
use App\Conversations\finishperiodontitisOptionConversion;

class anthorperiodontitisOptionConversion extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
        {
                $arrsyps=[];
                $arrid=[];
           
            $spys= DB::table('treatments')->select("treatments.*")->where("SymId",2)->get();
            if(session()->get('lang') == "ar"){
                foreach($spys as $spy){
                     array_push($arrsyps, $spy->Symptomsar);
                     array_push($arrid, $spy->id);
             
                 }
                 $next="اضغط التالي  لعرض النتيجة";
                 $str="اي الم تشعر ؟";
             }
            else{
                foreach($spys as $spy){
                     array_push($arrsyps, $spy->Symptoms);
                     array_push($arrid, $spy->id);
             
                 }
                 $next="press to Next go to reslut";
                 $str="which do you feel  pain?";
             } 
           
            $question = Question::create($str)->fallback('Unable choose option')
            ->callbackId('ask option')
                ->addButtons([
                        Button::create($arrsyps[4])->value("4"),
                        Button::create($arrsyps[5])->value("5"),
                        Button::create($arrsyps[6])->value("6"),
                        Button::create($arrsyps[7])->value("7"),
                        Button::create($next)->value("next"),
                        
                ]);
                   
                $this->bot->ask($question,function(Answer $answer){
                    if(session()->get('lang') == "ar"){
                        $num="انت اختارت من الاعراض رقم ";
                    }
                    else{
                       
                        $num="You have added Diagnosis Selection Number ";
                    } 
                    if ($answer->isInteractiveMessageReply()){
    
                        $val=$answer->getValue();
                        switch($val){
                            case '4': 
                                session()->put('pr4', $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new anthorperiodontitisOptionConversion());
                            break;   
                            case '5': 
                                session()->put('pr5', $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new anthorperiodontitisOptionConversion());
                            break; 
                            case '6': 
                                session()->put('pr6', $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new anthorperiodontitisOptionConversion());
                            break; 
                            case '7': 
                                session()->push('pr7', $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new anthorperiodontitisOptionConversion());
                            break; 
                            case 'next': 
                                $this->bot->startConversation(new finishperiodontitisOptionConversion());
                            break; 
                        }
                    }
                   
                });
               

            }
}
