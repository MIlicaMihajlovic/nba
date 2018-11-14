<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class VerificationEmail
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
        $user = User::where('email', $request->email)->first();
        if(!$user->is_verified)
        {
            session()->flash('warning', 'Morate prvo verifikovati vas nalog!');
            return redirect('/login'); 
        }
        
        return $next($request);
    }
}
