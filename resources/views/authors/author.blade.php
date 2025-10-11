@include('header')
    <div class="container-fluid">
        <h2 class="text-center">Agregar Autor</h2>
        <form action="{{ route('authors.store') }}" method="post">
            @csrf
            <label for="" class="form-label">Nombre</label>
            <input type="text" name="name" id="" class="form-control">
            <label for="" class="form-label">Nacionalidad</label>
            <input type="text" name="nationality" id="" class="form-control">
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
    <div class="container-fluid">
        <h2 class="text-center">Registro de Autores</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Nacionalidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <th>{{ $author->id }}</th>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->nationality }}</td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('authors.edit', $author->id )}}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('authors.destroy', $author->id )}}" method="post">
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