<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libros - Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
<body>
  <div class="container">
    <div>
        <div class="btn-group">
            <a href="{{ route('books.index') }}" class="btn btn-primary">Libros</a>
            <a href="{{ route('authors.index') }}" class="btn btn-info">Autores</a>
            <a href="{{ route('author_books.index') }}" class="btn btn-dark">Libros - Autores</a>
        </div>
    </div>