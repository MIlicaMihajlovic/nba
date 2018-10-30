<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function create()
  {
      return view('register.create');
  }

  public function store()
  {
    
  }
}
