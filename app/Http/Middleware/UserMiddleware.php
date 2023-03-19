<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Carbon;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->isban)
        {
            $banned = Auth::user()->isban == "1";
            Auth::logout();

            if($banned == 1){
                $message = 'Your account has been banned please call administrator';
            }
            return redirect()->route('login')
                    ->with('status'.$message)
                    ->withErrors(['email'=> 'Your account has been banned please call administrator']);
        }

        if (Auth::check())
        {
            $expiresAt = Carbon::now()->addMinutes(1);
            Cache::put('user-is-online' . Auth::user()->id,true,$expiresAt);
        }
        return $next($request);
    }
}
