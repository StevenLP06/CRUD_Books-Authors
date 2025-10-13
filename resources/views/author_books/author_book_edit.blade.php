@include('header')
    <div class="container-fluid">
        <form action="{{ route('author_books.update', $author_book->id )}}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="" class="form-label">Libro</label>
                <select name="book_id" id="" class="form-select">
                    <option value="{{ $author_book->id }}">{{ $author_book->book->title }}</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="" class="form-label">Autor</label>
                <select name="author_id" id="" class="form-select">
                    <option value="{{ $author_book->id }}">{{ $author_book->author->name }}</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@include('footer')