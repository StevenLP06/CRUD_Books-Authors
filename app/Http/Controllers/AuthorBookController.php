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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
