<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyMe
{
   
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()){
            $user = auth()->user();

            if ($user->email == 'aa@a.com') {
                return $next($request);
            } 
        
            return response(['message' => 'You are not authorized to access this page.'], 403);
            }
             return redirect('/login');
        }
        
    }
 