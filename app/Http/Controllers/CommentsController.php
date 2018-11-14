<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;

class CommentsController extends Controller
{
    public function store($team_id){ //team id smo prosledili iz rute u web php

        $team = Team::findOrFail($team_id);
        
        $this->validate(
            request(),
            Comment::VALIDATION_RULES
        );
//dd(request());
        $comment = new Comment();
        $comment->user_id = auth()->user()->id; //ovaj user koji je autentifikovan daj mi njegov id
        $comment->team_id = $team_id;
        $comment->content = request('content'); //pisemo u zagradi content jer nam je to ime inputa u formi
        $comment->save();

    Mail::to($team->email)->send(new CommentReceived($team));    

        return redirect("/teams/$team_id"); //kada stavis duple navodnike mozes da iskoristis varijablu
        //a kada pisemo {} onda tu cuvamo prostor za nesto sto cemo mu proslediti
    }

    
}
