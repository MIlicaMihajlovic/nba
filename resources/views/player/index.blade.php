<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>NBA</title>
    
</head>
<body>
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
</body>
</html>