<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            text-align: center;
        }
    </style>
    <title>Edição do produto: {{$produto->nome}}</title>
</head>
<body>    
        <h1 class="centered">Alterar Produto: {{$produto->nome}}</h1>
        <div class="form-group">
            {!! Form::open(['url' => 'produto/'. $produto->id, 'method'=>'put'])!!}

            {!! Form::label('categoria', 'Categoria:')!!}<br>
            {!! Form::select('categoria_id', $categorias, $produto->categoria->categoria_id) !!}<br>

            {!! Form::label('nome', 'Nome:')!!}<br>
            {!! Form::text('nome', $produto->nome)!!}<br>

            {!! Form::label('quantidade', 'Quantidade:')!!}<br>
            {!! Form::text('quantidade', $produto->quantidade)!!}<br>

            {!! Form::label('valor', 'valor:')!!}<br>
            {!! Form::text('valor', $produto->valor)!!}

            {!! Form::submit('enviar')!!}<br>
            {!! Form::close()!!} 
            <a class="btn btn-success mt-2" href="{{ route('produto.index') }}">Voltar</a>
        </div>
</body>
</html>