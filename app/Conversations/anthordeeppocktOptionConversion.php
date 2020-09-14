<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Facades\DB;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use App\Conversations\finishdeeppocktOptionConversion;

class anthordeeppocktOptionConversion extends Conversation
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
                 $str="اي الم تشعر ؟";
                
                 $next="اضغط التالي لعرض النتيجة";
                 
                
             } else{
                 foreach($spys as $spy){
                      array_push($arrsyps, $spy->Symptoms);
                      array_push($arrid, $spy->id);
              
                  }
                 
                  $str="which do you feel  pain?";
                  $next="press to Next to go result";
              }
           
            $question = Question::create($str)->fallback('Unable choose option')
            ->callbackId('ask option')
                ->addButtons([
                        Button::create($arrsyps[3])->value("4"),
                        Button::create($arrsyps[4])->value("5"),
                        Button::create($arrsyps[5])->value("6"),
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
                                session()->put("d4", $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new anthordeeppocktOptionConversion());
                            break;   
                            case '5': 
                                session()->put("d5", $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new anthordeeppocktOptionConversion());
                            break; 
                            case '6': 
                                session()->put("d6", $val);
                                $this->bot->reply($num." ".$answer->getText());
                                $this->bot->startConversation(new anthordeeppocktOptionConversion());
                            break; 
                            case 'next': 
                                session()->put("next", $val);
                                $this->bot->startConversation(new finishdeeppocktOptionConversion());
                            break; 
    
                        }
                    }
                
                });
        

            }
}
