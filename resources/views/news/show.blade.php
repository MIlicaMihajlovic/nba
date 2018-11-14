@extends('layouts.master')



@section('content')
      <h1>News</h1>  
        <h4> {{ $new->title }} </h4>
      <p> {{ $new->content }} </p>

      <p><strong>Author: </strong>{{ $new->user->name }}</p>
      
@endsection