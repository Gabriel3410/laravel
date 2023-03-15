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

    <a class="btn btn-success " href="{{ url('categoria/create') }}">CRIAR</a>

    @if (session('status'))
        <div class="alert alert-successes">
            {{session('status')}}
        </div>
    @endif

    <table class="table table-striped table-dark">
        <tr>
            <th>Nome</th>
            <th>Visualiazar</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        @foreach ($categoria as $item)
            <tr>
                <td>{{ $item->nome}}</td>
                <td><a class="btn btn-success " href="{{ url('categoria/'. $item->id)}}">Visualizar</a></td>
                <td><a class="btn btn-success " href="{{ url('categoria/'. $item->id . '/edit')}}">Editar</a></td>
                <td>
                    {!! Form::open(['url' => 'categoria/'. $item->id, 'method' => 'delete']) !!}
                        {!! Form::submit('Excluir')!!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>