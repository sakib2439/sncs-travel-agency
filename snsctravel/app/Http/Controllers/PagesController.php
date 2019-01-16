<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PagesController extends Controller
{
  public function about()
  {
      return view('pages.about');
  }

  public function services()
  {
      return view('pages.services');
  }

  public function contact()
  {
      return view('pages.contact');
  }


  public function store(Request $request)
    {
        $this->validate($request,[
          'name'=> 'required',
          'email'=> 'required',
          'subject'=> 'required',
          'message'=> 'required',
        ]);

        $post = new Contact;
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->subject = $request->input('subject');
        $post->message = $request->input('message');
        $post->save();

        return redirect('/contact')->with('success','Email Sent Successfully !');

    }

}
