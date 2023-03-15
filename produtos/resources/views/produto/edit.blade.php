<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição do produto: {{$produto->nome}}</title>
</head>
<body>

    <h1>Alterar Produto: {{$produto->nome}}</h1>
    <div class="row mb-3">
        <div class="form-group">
            {!! Form::open(['url' => 'produto/'. $produto->id, 'method'=>'put'])!!}
            {!! Form::label('nome', 'Nome:')!!}<br>
            {!! Form::text('nome', $produto->nome)!!}<br>
            {!! Form::label('quantidade', 'Quantidade:')!!}<br>
            {!! Form::text('quantidade', $produto->quantidade)!!}<br>
            {!! Form::label('valor', 'valor:')!!}<br>
            {!! Form::text('valor', $produto->valor)!!}
            {!! Form::submit('enviar')!!}<br>
            {!! Form::close()!!} 
        </div>
    </div>
</body>
</html>