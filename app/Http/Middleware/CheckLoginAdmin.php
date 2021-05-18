<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class CheckLoginAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if(!get_data_user('admins'))
        {
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
