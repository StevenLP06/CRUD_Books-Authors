<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthorBook;
use App\Models\Author;
use App\Models\Book;

class AuthorBookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $authors = Author::all();
        $author_books = AuthorBook::all();
        return view('author_books.author_book', compact('books', 'authors', 'author_books'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $author_book = new AuthorBook;
        $author_book->author_id = $request->author_id;
        $author_book->book_id = $request->book_id;
        $author_book->save();
        return redirect()->route('author_books.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $author_book = AuthorBook::find($id);
        $books = Book::all();
        $authors = Author::all();
        return view('author_books.author_book_edit', compact('author_book', 'books', 'authors'));
    }

    public function update(Request $request, $id)
    {
        $author_book = AuthorBook::find($id);
        $author_book->book_id = $request->book_id;
        $author_book->author_id = $request->author_id;
        $author_book->save();
        return redirect()->route('author_books.index');
    }

    public function destroy($id)
    {
        $author_book = AuthorBook::find($id);
        $author_book->delete();
        return redirect()->route('author_books.index');
    }
}
