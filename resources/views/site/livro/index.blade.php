<html>

<body>
    <h1>{{ $titulo }}</h1>

    <a href="{{ route('livros.create') }}">Adicionar Livros</a>
    <hr>

    @foreach ($livros as $livro)
        <h3>
            <a href="{{ url('livros/' . $livro->id) }}">{{ $livro->titulo }}</a>
        </h3>
        
    @endforeach
</body>

</html>