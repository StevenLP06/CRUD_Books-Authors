@include('header')
    <div class="container-fluid">
        <h2 class="text-center">Agregar Libro</h2>
        <form action="{{ route('books.store') }}" method="post">
            @csrf
            <label for="" class="form-label">Titulo</label>
            <input type="text" name="titulo" id="" class="form-control">
            <label for="" class="form-label">Precio</label>
            <input type="number" name="precio" id="" class="form-control">
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
    <div class="container-fluid">
        <h2 class="text-center">Registro de Libros</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <th>{{ $book->id }}</th>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->price }}</td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('books.edit', $book->id )}}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('books.destroy', $book->id )}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@include('footer')