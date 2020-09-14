<?php

namespace App\Conversations;
use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Conversations\PulpitisOptionConversion;
use App\Conversations\periodontitisOptionConversion;
use App\Conversations\deeppocktOptionConversion;
use Illuminate\Support\Facades\DB;

class startOptionConversion extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
  
    public function run()
    {
        if(session()->get('lang') == "ar"){
            $str="اي الم تشعر ؟";
            $btn1="هل تشعر بتورم مع الم حاد في اسنانك؟";
            $btn2="هل لديك نزيف مع الم حاداو احمرار في اسنانك";
            $btn3="هل يوجد الم مع تسوس في احد الاسنان";
          }
        else{
            $str="which do you feel  pain?";
            $strfullback="";
           $btn1="Do you have swelling with severe pain in your teeth?";
           $btn2="Do you have bleeding with severe pain with redness on your gums?";
           $btn3="Do you have pain in your teeth with decay in one of them?";
         } 
       
        $question = Question::create($str)->fallback('Unable choose option')
        ->callbackId('ask option')
            ->addButtons([
                           
                                
                    Button::create($btn1)->value("Pulpitis"),
                    Button::create($btn2)->value("periodontitis"),
                    Button::create($btn3)->value("deeppockt"),
                  
                    
            ]);
               
            $this->bot->ask($question,function(Answer $answer){
                if ($answer->isInteractiveMessageReply()){

                    $val=$answer->getValue();
                    switch($val){
                        case 'Pulpitis': 
                            $this->bot->startConversation(new PulpitisOptionConversion());
                        break;   
                        case 'periodontitis': 
                            $this->bot->startConversation(new periodontitisOptionConversion());
                        break; 
                        case 'deeppockt': 
                            $this->bot->startConversation(new deeppocktOptionConversion());
                        break; 

                    }
                }
               
            });
          
    }



    
}
