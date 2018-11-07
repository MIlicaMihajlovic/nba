<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content', 'user_id','team_id'
    ];

    const VALIDATION_RULES = [
        'content' => 'required|min:10'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);  //moramo da povezemo i sa userom zbog autentikacije
    }
}
