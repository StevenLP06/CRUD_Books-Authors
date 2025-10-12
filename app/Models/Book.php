<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function authorBooks()
    {   
        // Un LIBRO tiene MUCHOS AUTORES
        return $this->hasMany(AuthorBook::class);
    }
}
