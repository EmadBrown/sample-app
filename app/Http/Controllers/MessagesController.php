<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required  |min:5'
      ]);

      //Create New Message
      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');

      // Save Message();
      $message->save();

      // Redirect
      return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages(){
      $messages = Message::paginate(4);
      return view('messages')->withMessages($messages);
    }
}
