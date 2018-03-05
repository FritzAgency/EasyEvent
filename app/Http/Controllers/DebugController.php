<?php
use Log;

class SocialAuth extends Controller
{
   public function FuncName(Request $request){

     // log something to storage/logs/debug.log
     Log::useDailyFiles(storage_path().'/logs/laravel.log');
     Log::info(['Request'=>$request]);

   }
}

?>