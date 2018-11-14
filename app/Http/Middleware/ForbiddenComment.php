<?php

namespace App\Http\Middleware;

use Closure;
use App\Comment;

class ForbiddenComment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $badwords = ['hate', 'idiot', 'stupid'];

        foreach($badwords as $word){
            if(preg_match("/\b$word\b/i",$request)){
                return response(view('comment.forbidden-comment'));
            }
        }

        return $next($request);
    }
}
