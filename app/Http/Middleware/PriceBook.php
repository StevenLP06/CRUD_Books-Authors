<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Book;

class PriceBook
{
    public function handle(Request $request, Closure $next)
    {
        $book_expensive = Book::orderBy('price', 'desc')->first();
        // dd($book_expensive);
        if ($book_expensive->price >= 1000){
            return $next($request);
        }else{
            return abort(403, 'El libro es muy barato');
        }
    }
}
