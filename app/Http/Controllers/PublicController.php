<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Mail\ContactAdminMail;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{function homepage() {
    $title = 'Laravel 4 - es 25';
    return view('welcome',['title'=> $title]);
}
//

public function contactUs() {
    return view('contactUs');
}

public function contactUsSumbit(Request $request) {
    // dd($request->all());
    $name=$request->input('name');
    $mail=$request->input('email');
    $message=$request->message;
    // dd($name,$email,$message);
    Mail::to($mail)->send(new ContactMail($name, $mail, $message));
    // dd('Controlla la tua casella di posta');
    return redirect()->route('Home')->with('mailSuccess','La tua mail è stata spedita, controlla la tua casella di posta per conferma');
}


public function contactUsAdminSumbit(Request $request) {
    // dd($request->all());
    $name=$request->input('name');
    $mail=$request->input('email');
    $message=$request->input('email');
    // dd($name,$email,$message);
    Mail::to($mail)->send(new ContactAdminMail($name, $mail, $message));
    // dd('Controlla la tua casella di posta');
    return redirect()->route('Home')->with('mailSuccess','La tua mail è stata spedita, controlla la tua casella di posta per conferma');
}


};
