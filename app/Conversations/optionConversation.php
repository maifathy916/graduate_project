<?php

namespace App\Conversations;
use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Facades\DB;
class optionConversation extends Conversation
{

    


    public function tereatments(){
        
    }    /**
     * Start the conversation.
     *
     * @return mixed
     */
  
    public function run()
    {
            $arrsyps=[];
            $arrid=[];
       
        $spys= DB::table('treatments')->select("treatments.*")->where("SymId",1)->paginate(4);
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
                    Button::create($arrsyps[0])->value($arrid[0]),
                    Button::create($arrsyps[1])->value($arrid[1]),
                    Button::create($arrsyps[2])->value($arrid[2]),
                    Button::create($arrsyps[3])->value($arrid[3]),
                  
                    
            ]);
               
            $this->bot->ask($question,function(Answer $answer){
                
                if ($answer->isInteractiveMessageReply()){

                    $val=$answer->getValue();
                    switch($val){
                        case '1': 
                            session()->push($val, $val);
                        break;   
                        case '2': 
                            session()->push($val, $val);
                        break; 
                        case '3': 
                            session()->push($val, $val);
                        break; 
                        case '4': 
                            session()->push($val, $val);
                        break; 

                    }
                }
                dd($answer->getValue());
            });
            $this->bot->ask("please enter next after your chooices? next or NEXT",function( Answer $answer){
                if($answer->getValue()==="next" )
                     $this->bot->startConversation(new anthorOptionConversion());
                 else
                 $this->bot->startConversation(new optionConversation());
                       
            });
    }


    public function askanter($val,$indx){
        
        $question = Question::create("What do you feel  pain?")->fallback('Unable choose option')->callbackId('ask option')
            ->addButtons([
                   
                    Button::create($val)->value($indx),
                    Button::create("No")->value("No"),
                    
                   
            ]);
    }
}
