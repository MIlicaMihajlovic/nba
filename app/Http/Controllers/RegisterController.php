<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationMail;

class RegisterController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest');  //samo gosti vide ovu stranicu da se registruju
  }

  public function create()
  {
      return view('register.create');
  }

  public function store()
  {
    
    $this->validate(
      request(),
      User::VALIDATION_RULES
    );

 //  dd(request());
    $user = new User();
    $user->name = request ('name');
    $user->email = request ('email');
    $user->password = bcrypt(request('password'));
    $user->is_verified = false;
    $user->verification_code = str_random(40); //ovde smo definisali u kontroleru verifikacioni kod
    $user->save();

    

   Mail::to($user->email)->send( new VerificationMail($user));

   // auth()->login($user); ovo dozvoljava da nakaon registracije korisnik bude odmah ulogovan

    session()->flash('message', 'Hvala sto ste se registrovali!');

   return redirect('/login');
  }

  public function verify($verification_code)
  {
    
    //verifikacioni kod sam mu prosledila jer smo u i u ruti prosledili
    //tako da ga trazimo preko tog verifikacionog koda
    $user= User::where('verification_code', $verification_code)->first();

    
        $user->is_verified = true;
        $user->verification_code = null; //a ovde treba da ga izbrise kad klikne na link
        $user->save(); //sacuvali smo verifikovanog user-a
      
      session()->flash('message', 'Vas nalog je verifikovan');
      return redirect('/login');
    }
    
    
  
}










