@include('header')
    <div class="container">
        <div class="container-fluid">
            <h2>Agregar Libro</h2>
            <form action="{{ route('books.store') }}" method="post">
                @csrf
                <label for="" class="form-label">Titulo</label>
                <input type="text" name="titulo" id="" class="form-control">
                <label for="" class="form-label">Precio</label>
                <input type="number" name="precio" id="" class="form-control">
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
@include('footer')