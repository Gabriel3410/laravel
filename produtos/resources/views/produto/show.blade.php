<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Produto {{$produto->nome}}</title>
        <style>
            body{
                text-align:center;
                background-color:#d9d9d9;
            }
        </style>
        </head>
        <body>
 
        <h1>Produto: {{$produto->nome}}</h1>

        <b>Quantidade:</b> {{ $produto->quantidade }} <br>
        <b>Valor:</b> {{ $produto->valor }} <br>
        <br><br>    

        <a class="btn btn-success mt-2" href="{{ route('produto.index') }}">Voltar</a>

       
    </body>
</html>
