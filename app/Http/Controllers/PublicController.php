<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Mail\ContactAdminMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
// {function homepage() {
//     $title = 'Laravel - es 27 - Pokemon Api';
//     return view('welcome',['title'=> $title]);
// }

{
public function homepage() {
        $title = 'Laravel - es 27 - Pokemon Api';
        $pokemons = Http::get('https://pokeapi.co/api/v2/pokemon/')->json()['results'];
        // dd($pokemons);
        return view('welcome', ['title' => $title, 'pokemons' => $pokemons]);
    }
//

public function pokemonDetail($name){
    // dd($name);
    $pokemon = http::get('https://pokeapi.co/api/v2/pokemon/'.$name)->json();
    // dd($pokemon);
    return view('detailpokemon', [ 'pokemon' => $pokemon]);
}


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
