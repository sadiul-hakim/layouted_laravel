<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send(Request $request){
        $to = $request -> to;
        $subject = $request -> mail_subject;
        $content = $request -> mail_content;
        // $to = "sadiulhakim@gmail.com";
        // $subject = "Test Mail";
        // $content = "Test Mail";

        Mail::to($to)->send(new WelcomeMail($subject,$content));
        return view("mail_sender");
    }
}
