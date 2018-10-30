@extends('layouts.master')

@section('title') 
   NBA
@endsection


@section('content') 
    <h1>List of teams</h1>

  <ul>
    
    @foreach($teams as $team)
    <li>
        <a href="/teams/{{$team->id}}">
        {{ $team->name }}
        </a>
    </li>    
    @endforeach
    
  </ul>  
@endsection