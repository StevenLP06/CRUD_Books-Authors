<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function authorBooks()
    {   
        // Un AUTOR tiene MUCHOS LIBROS
        return $this->hasMany(AuthorBook::class);
    }
}
