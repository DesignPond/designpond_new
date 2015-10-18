<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SendMessageRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * Send contact message
     *
     * @return Response
     */
    public function sendMessage(Request $request){

        $validator = \Validator::make($request->all(), [
            'email'       => 'required',
            'nom'         => 'required',
            'information' => 'required',
        ]);

        if ($validator->fails())
        {
            return redirect('/?#cours')->withErrors($validator)->withInput();
        }

        $data = ['email' => $request->email, 'nom' => $request->nom, 'remarque' => $request->remarque, 'information' => $request->information ];

        \Mail::send('emails.contact', $data , function($message)
        {
            $message->to('info@designpond.ch', 'DesignPond')->subject('Message depuis le site www.designpond.ch');
        });

        return redirect('/')->with(['status' => 'primary', 'message' => '<strong>Merci pour votre message</strong><br/>Je vous contacterai dès que possible.']);

    }
}
