<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Facades\DB;

class finishdeeppocktOptionConversion extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $s="";
        for($i=1;$i<8;$i++){
            if(session()->has("d".$i)){
             $r= DB::table('treatments')->select("treatments.*")->where("id",session()->get("d".$i))->get();
           
             if($r[0]->analgesics != "null")
                $s  .= $r[0]->analgesics. " , ";
            
            if($r[0]->antibiotics != "null")
                $s  .= $r[0]->analgesics. " , ";
            
            }
         }
         if(session()->get('lang') == "ar"){
            $rrr= DB::table('symptoms')->select("symptoms.*")->where("id","3")->get();
             foreach($rrr as $rr){
                   $desis=$rr->namear;
             }
             $st=" انت لديك ".$desis." يمكننا مساعدتك ببعض الادوية مثل ".$s; 
             $this->bot->reply($st);
         } else{
           $rrr= DB::table('symptoms')->select("symptoms.*")->where("id","3")->get();
            foreach($rrr as $rr){
                  $desis=$rr->name;
            }
            $desis="dddd";
            $this->bot->reply("you have ".$desis." in your teeth and we help for some drug as  ". $s);
          }
             
          for($i=1;$i<8;$i++){
            if(session()->has("d".$i)){
                session()->forget("d".$i);
            }
         }

        
    }
}
