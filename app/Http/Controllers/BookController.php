<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('books.book')->with('books', $books);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->titulo;
        $book->price = $request->precio;
        $book->save();
        return redirect()->route('books.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.book_edit')->with('book', $book);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->titulo;
        $book->price = $request->precio;
        $book->save();
        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }

    public function getMaxPrice()
    {
        // $book = Book::orderBy('price', 'desc')->first();
        // return $book;
        // dd($book);
        // return view('books.book')->with('book', $book);

        $book_max_price = Book::orderBy('price', 'desc')->first();
        $books = Book::all();
        return view('books.book', compact('books', 'book_max_price'));
    }
}
