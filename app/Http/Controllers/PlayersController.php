<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //ne dopusta nam da vidimo stranicu ako nismo user
                                    //dopusta samo userima da vide stranicu
    }

    public function index()
    {
        $players = Player::all();

        return view('player.index', ['players' => $players]);
    }

    public function show($id)
    {
        $player = Player::findOrFail($id);

        return view('player.show', ['player' => $player]);
    }
}
