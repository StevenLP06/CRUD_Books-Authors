<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorBookController;

// RUTAS LIBROS
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

// RUTAS AUTORES
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{id}', [AuthorController::class, 'update'])->name('authors.update');
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');

// RUTAS AUTORES - LIBROS
Route::get('/author_books', [AuthorBookController::class, 'index'])->name('author_books.index');
Route::post('/author_books', [AuthorBookController::class, 'store'])->name('author_books.store');
Route::get('/author_books/{id}', [AuthorBookController::class, 'edit'])->name('author_books.edit');
Route::put('/author_books/{id}', [AuthorBookController::class, 'update'])->name('author_books.update');
Route::delete('/author_books/{id}', [AuthorBookController::class, 'destroy'])->name('author_books.destroy');

// RUTA PARA CONSEGUIR EL MAYOR PRECIO - MÉTODO PROPIO
Route::get('/get_max_price', [BookController::class, 'getMaxPrice'])->name('books.get_max_price');

// RUTA MIDDLEWARE TEST
// Route::get('/test_middleware', function(){
//     return 'Middleware Test Succesful';
// })->middleware('test');

Route::get('/book_price', function(){
    return 'Puede seguir';
})->middleware('PriceBook');

Route::get('/book_find', function(){
    return 'Puede seguir';
})->middleware('BookFind');

Route::get('/book_sum', function(){
    return 'Puede seguir';
})->middleware('BookSum');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
