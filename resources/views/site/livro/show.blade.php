<html>
    <body>
        <h1>{{ $livro->titulo }}</h1>
        <a href="{{ route('livros.edit' , $livro->id)}}">Alterar</a>

        <h2>Autor</h2>
        <p>{{ $livro->autor }}</p>

        <h2>Numero de Paginas</h2>
        <p>{{ $livro->paginas }} paginas</p>

        <h2>Ano de publicacao</h2>
        <p>{{ $livro->ano_publicacao }}</p>


        <a href="{{ url('livros') }}">Voltar</a>
    </body>
</html>
