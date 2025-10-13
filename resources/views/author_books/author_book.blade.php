@include('header')
    <div class="container-fluid">
        <form action="{{ route('author_books.store') }}" method="post">
            @csrf
            <h2 class="text-center">Seleccione Autores y sus Libros</h2>
            <select name="book_id" id="" class="form-select">
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
            <select name="author_id" id="" class="form-select">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-success">Guardar</button> 
        </form>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Libro</th>
                        <th>Autor/es</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($author_books as $author_book)
                        <tr>
                            <th>{{ $author_book->id }}</th>
                            <td>{{ $author_book->book->title }}</td>
                            <td>{{ $author_book->author->name }}</td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('author_books.edit', $author_book->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('author_books.destroy', $author_book->id) }}" method="post">
                                    @csrf 
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@include('footer')