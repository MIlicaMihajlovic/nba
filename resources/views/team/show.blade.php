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
{{-- ako nema komentara da ne ispisuje --}}
  @if(count($team->comments)) 
    <h4>Comments:</h4>

        <ul class="list-unstyled">
            @foreach($team->comments as $comment)

                <li>
                    <p><strong>Author:</strong> {{ $comment->user->name}}</p>
                    <p>{{ $comment->content }}</p>
                  
                </li>

            @endforeach
            
        </ul>
  @endif

  <form method="POST" action="/teams/{{$team->id}}/comments">
    {{ csrf_field() }}

    <div class="form-group">
      <label>Text</label>
      <textarea name="content" type="text" class="form-control" placeholder="Enter text"></textarea>
      @include('layouts.partials.error-message', ['field' => 'content']) 
      </div>

      <!-- bitan nam je name -->

  <button type="submit" class="btn btn-primary">Submit</button>

  </form>
       
@endsection