<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Test
{
    public function handle(Request $request, Closure $next)
    {
        $val = 2;
        if ($val == 1){
            return $next($request);
        }else{
            return abort(403, "No puede continuar");
        }
    }
}
