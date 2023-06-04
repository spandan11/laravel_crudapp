<?php

namespace App\Helpers;

class Alert
{
    public static function SetSuccessMessage(string $message){
        session()->flash("Message:Success",$message);
    }
    
    public static function SetErrorMessage(string $message){
        session()->flash("Message:Error",$message);
    }

    public static function SetInfoMessage(string $message){
        session()->flash("Message:Info",$message);
    }
}
