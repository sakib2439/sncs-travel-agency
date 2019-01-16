<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
use Session;

class MailController extends Controller
{
    public function sendmail(Request $get){
      $this->validate($get, [
        'name'=>'required',
        'email'=>'required',
        'subject'=>'required',
        'message'=>'required',
      ]);

      $name = $get->name;
      $email = $get->email;
      $subject = $get->subject;
      $message = $get->message;

      Mail::to('sakib2439@gmail.com')->send( new SendEmail($name, $email, $subject, $message) );
      Session::flash('success');
      return back();

    }
}
