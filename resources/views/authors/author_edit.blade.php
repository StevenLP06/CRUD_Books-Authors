@include('header')
    <div class="container">
        <div class="container-fluid">
            <h2 class="text-center">Actualizar Autor</h2>
            <form action="{{ route('authors.update', $author->id) }}" method="post">
                @csrf
                @method('put')
                <label for="" class="form-label">Nombre</label>
                <input type="text" name="name" id="" class="form-control" value="{{ $author->name }}">
                <label for="" class="form-label">Nacionalidad</label>
                <input type="text" name="nationality" id="" class="form-control" value="{{ $author->nationality }}">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
@include('footer')