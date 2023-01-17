<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class requireAuth
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
          //var_dump($request);
            
       // 
    //    if($request->age && $request->age <=18){
    //        return  redirect("login");          
    //    }
    // const{ userId, email, role } = payload;
    // req.user = { userId, email, role };
    //    return $next($request);
    }
}
