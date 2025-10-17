<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Book;

class BookFind
{
    public function handle(Request $request, Closure $next)
    {
        $id = $request->route('id');
        $book = Book::find($id);
        if ($book->price > 100){
            return $next($request);
        }else{
            return abort(403, 'No puede seguir.');
        }
    }
}
