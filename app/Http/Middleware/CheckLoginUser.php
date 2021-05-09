<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class CheckLoginUser
{
    public function handle(Request $request, Closure $next)
    {
        if(!get_data_user('web'))
        {
            return redirect()->route('get.login');
        }
        return $next($request);
    }
}
