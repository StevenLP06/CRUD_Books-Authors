@include('header')
    <div class="container-fluid">
        <h2 class="text-center">Registro de Autores</h2>
        <form action="{{ route('authors.store') }}" method="post">
            @csrf
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Insertar
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Autor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" name="name" id="" class="form-control">
                        <label for="" class="form-label">Nacionalidad</label>
                        <input type="text" name="nationality" id="" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
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