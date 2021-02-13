<html>

<body>
    <h1>Novos Livros</h1>

    <form method="POST" action="{{route('livros.store')}}">
        @csrf
        <div>
            <input type="text" name="titulo" placeholder="Titulo:">
        </div>

        <div>
            <input type="text" name="autor" placeholder="Autor:">
        </div>

        <div>
            <input type="number" name="paginas" placeholder="Paginas:">
        </div>

        <div>
            <input type="number" name="ano_publicacao" placeholder="Ano de Publicacao:">
        </div>

        <Button>Salvar</Button>
    </form>
</body>
</html>