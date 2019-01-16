<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendsms(Request $request){

       $mes = $request->input('message');
      // $mobile = $request->input('email');
      //
      $encodeMessage = urlencode($mes);
      // $authkey = 'aedffd40';
      // $senderId = '+8801766115337';
      // $route =4;
      //
      //  //$postData = $request->all();
      // // $mobileNumber = implode(",", $postData['email']);
      // // // $arr = str_split($mobileNumber, '12');
      // //
      //  // $mobiles = implode(",",$mobile);
      //
      // $data = array(
      //
      //   'authkey'=>$authkey,
      //   'mobiles'=>$mobile,
      //   'message'=>$message,
      //
      //   'sender'=>$senderId,
      //   'route'=>$route
      // );
      //
      //
      // $url = "https://rest.nexmo.com/sms/json";
      //
      // $ch = curl_init();
      // curl_setopt_array($ch, array(
      //
      //   CURLOPT_URL => $url,
      //   CURLOPT_RETURNTRANSFER => true,
      //   CURLOPT_POST => true,
      //   //CURLOPT_POSTFIELDS =>$postData
      //
      // ));
      //
      //
      // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      //
      // $output = curl_exec($ch);
      //
      // if(curl_errno($ch)){
      //   echo "error:" . curl_error($ch);
      // }
      //
      // curl_close($ch);

      $basic  = new \Nexmo\Client\Credentials\Basic('aedffd40', 'zITDfQ1JuCCultkh');
      $client = new \Nexmo\Client($basic);

      $message = $client->message()->send([
        'to' => '8801766115337',
        'from' => 'SAKIB',
        'text' => $encodeMessage
        ]);


      return redirect('/contact')->with('success', 'Message sent Successfully');



    }
}
