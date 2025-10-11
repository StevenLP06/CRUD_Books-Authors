@include('header')
    <div class="container">
        <div class="container-fluid">
            <h2 class="text-center">Actualizar Libro</h2>
            <form action="{{ route('books.update', $book->id) }}" method="post">
                @csrf
                @method('put')
                <label for="" class="form-label">Titulo</label>
                <input type="text" name="titulo" id="" class="form-control" value="{{ $book->title }}">
                <label for="" class="form-label">Precio</label>
                <input type="number" name="precio" id="" class="form-control" value="{{ $book->price }}">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
@include('footer')