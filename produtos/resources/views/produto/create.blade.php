<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Adicionar produto</title>
</head>
<body>
    <h1>Olá</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>       
    @endif


    <div class="row mb-3">
        <div class="form-row">
            {!! Form::open(['url' => 'produto/create'])!!}
            {!! Form::label('categoria', 'Categoria:')!!}<br>
            {!! Form::select('categoria_id', $categorias) !!}<br>
            {!! Form::label('nome', 'Nome:')!!}<br>
            {!! Form::text('nome')!!}<br>
            {!! Form::label('quantidade', 'Quantidade:')!!}<br>
            {!! Form::text('quantidade')!!}<br>
            {!! Form::label('valor', 'valor:')!!}<br>
            {!! Form::text('valor')!!}
            {!! Form::submit('enviar')!!}<br>
            {!! Form::close()!!} 
        </div>
    </div>
</body>
</html>