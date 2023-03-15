<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            {!! Form::open(['url' => 'categoria/create'])!!}
            {!! Form::label('nome', 'Nome:')!!}<br>
            {!! Form::text('nome')!!}<br>
            {!! Form::submit('enviar')!!}<br>
            {!! Form::close()!!} 
        </div>
    </div>
</body>
</html>