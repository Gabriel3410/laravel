<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postagens</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
    </head>
    <body>

     <p>Postagens:<br></p>

    <strong>id:</strong> {{$postagem->id}} <br>
    <strong>Título</strong> {{$postagem->titulo}} <br>
    <strong>Conteúdo</strong> {{$postagem->conteudo}}<br>
    
    <br><br>
    @foreach($postagem->comentarios as $value)
        {{$value->conteudo}} <br>
    @endforeach
    
    </body>
    </html>
