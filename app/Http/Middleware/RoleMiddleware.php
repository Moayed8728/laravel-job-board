<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if(auth()->check())
        {
            $role = auth()->user()->role;
            $has_access = in_array($role, $roles);

            if(!$has_access){
                abort(403);
            }
        }
        return $next($request);
    }
}
