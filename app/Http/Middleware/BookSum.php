<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Book;

class BookSum
{
    public function handle(Request $request, Closure $next)
    {
        $book_sum = Book::sum('price');
        if ($book_sum > 100){
            return $next($request);
        }else{
            return abort(403, 'No puede ingresar.');
        }
    }
}
