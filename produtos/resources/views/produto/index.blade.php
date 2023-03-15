<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <h1>Produtos:</h1>

    <a href="{{ url('produto.create')}}">Criar</a>
    <table class="table table-striped table-dark">
        <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Visualiazar</th>
        </tr>
        @foreach ($produto as $item)
            <tr>
                <td>{{ $item->nome}}</td>
                <td>{{ $item->quantidade}}</td>
                <td>{{ $item->valor}}</td>
                <td><a href="{{ url('produto/'. $item->id)}}">Visualizar</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>