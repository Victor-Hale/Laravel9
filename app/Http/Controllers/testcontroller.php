<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
   public function text(Request $request)
   {
       $email = $request->input('email');
       $text = "123";
       $subject = "无主题i";
       $re = sendemail($email,$subject,$text);
   }
}
