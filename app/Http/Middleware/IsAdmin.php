<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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

        $user = Auth::user();

        if($user->isAdmin() == 2){
            return redirect('/');
        }
        elseif($user->isAdmin() == 3){
            return redirect('/student');
        }

        return $next($request);

        
    }
}
