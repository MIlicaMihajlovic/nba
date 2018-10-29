<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
   
    <title>Player</title>
    
</head>
<body>
    <div>
    <ul>
    <li>{{$player->first_name}}</li>
    <li>{{$player->last_name}}</li>
    <li>{{$player->email}}</li>
    <li><a href="{{ route('teams.show', ['id' => $player->team->id])}}">{{$player->team->name}}</a></li>
    </ul>
    </div>

    
</body>
</html>