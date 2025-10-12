<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorBook extends Model
{
    use HasFactory;

    public function author()
    {   
        // Un AUTOR PERTENECE a AUTORES
        return $this->belongsTo(Author::class);
    }

    public function book()
    {
        // un LIBRO PERTENECE a LIBROS
        return $this->belongsTo(Book::class);
    }
}
