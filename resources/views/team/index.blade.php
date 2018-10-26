<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>NBA</title>
    
</head>
<body>
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
</body>
</html>