@extends('layouts.master')

@section('title') 
    Players
@endsection


@section('content')
    <div>
    <ul>
    <li>{{$player->first_name}}</li>
    <li>{{$player->last_name}}</li>
    <li>{{$player->email}}</li>
    <li><a href="{{ route('teams.show', ['id' => $player->team->id])}}">{{$player->team->name}}</a></li>
    </ul>
    </div>
@endsection