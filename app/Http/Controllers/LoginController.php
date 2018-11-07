<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']); //samo gosti vide ovu stranicu
          //ali gost ne vidi logout, a logout nam je metoda u ovom istom kontroleru
    }

    public function index()
    {
        return view('login.index');
    }

    public function login()
    {
        //dd(request());
        if(!auth()->attempt(request(['email', 'password']))) //ako nema unetih polja ili su pogresno upisana (email, password)
        {
            session()->flash('message', 'Pogresio si sifru!');
            return back(); //vrati ovu poruku
        }
        


        return redirect('/'); //u suprotnom uloguj usera i redirektuj na stranicu gde su svi timovi
    }


    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    } 
}
