<?php

namespace App\Http\Controllers;


use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return view('team.index', ['teams' => $teams]);
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);

        return view('team.show', ['team' => $team]);
    }
}
