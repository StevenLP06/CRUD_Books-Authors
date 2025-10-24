<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Role
{
    public function handle(Request $request, Closure $next, $roles)
    {
        $user = Auth::user();
        if(!in_array($user->role->name, explode('|', $roles))){
            return abort(403, 'Acceso NO autorizado');
        }
        return $next($request);
    }
}
