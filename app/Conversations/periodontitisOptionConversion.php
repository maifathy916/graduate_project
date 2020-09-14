<?php

namespace App\Conversations;
use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Conversations\anthorperiodontitisOptionConversion;
use Illuminate\Support\Facades\DB;

class periodontitisOptionConversion extends Conversation
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
                  $next="اضغط التالي للاستمرار";
                  $str="اي الم تشعر ؟";
              } 
           else{
                foreach($spys as $spy){
                     array_push($arrsyps, $spy->Symptoms);
                     array_push($arrid, $spy->id);
             
                 }
                 $next="press to Next to continue";
                 $str="which do you feel  pain?";
             } 
           
            $question = Question::create($str)->fallback('Unable choose option')
            ->callbackId('ask option')
                ->addButtons([
                        Button::create($arrsyps[0])->value("1"),
                        Button::create($arrsyps[1])->value("2"),
                        Button::create($arrsyps[2])->value("3"),
                        Button::create($arrsyps[3])->value("4"),
                        Button::create($next)->value("next"),
                      
                        
                ]);
                   
                $this->bot->ask($question,function(Answer $answer){
                    if ($answer->isInteractiveMessageReply()){
                        if(session()->get('lang') == "ar"){
                            $num="انت اختارت من الاعراض رقم ";
                        }
                        else{
                       
                            $num="You have added Diagnosis Selection Number ";
                        } 
                        $val=$answer->getValue();
                        switch($val){
                            case '1': 
                                session()->put("pr1", $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new periodontitisOptionConversion());
                            break;   
                            case '2': 
                                session()->put("pr2", $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new periodontitisOptionConversion());
                            break; 
                            case '3': 
                                session()->put("pr3", $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new periodontitisOptionConversion());
                            break; 
                            case '4': 
                                session()->put("pr4", $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new periodontitisOptionConversion());
                            break; 
                            case 'next': 
                                $this->bot->startConversation(new anthorperiodontitisOptionConversion());
                            break; 
                        }
                    }
                    
                });
               

            }
}
