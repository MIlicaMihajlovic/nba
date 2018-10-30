@extends('layouts.master')
    
@section('title') 
   NBA
@endsection       

@section('content')
    <h1>List of players</h1>

  <ul>
    
    @foreach($players as $player)
    <li>
        <a href="/players/{{$player->id}}">
        {{ $player -> name }}
        </a>
    </li>    
    @endforeach
    
  </ul>  
@endsection