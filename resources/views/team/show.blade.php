@extends('layouts.master')

@section('title') 
   NBA
@endsection


@section('content') 
    <h1>Team</h1>

     <h2>{{ $team->name }}</h2>

     <p>{{ $team->email }}</p>

     <p>{{ $team->address }}</p>

     <p>{{ $team->city }}</p>


  <ul>
    
    @foreach($team->players as $player)
    <li>
        <a href="/players/{{$player->id}}">
        {{ $player->first_name }}
        {{ $player->last_name }}
        </a>
    </li>    
    @endforeach
    
  </ul>  
       
@endsection