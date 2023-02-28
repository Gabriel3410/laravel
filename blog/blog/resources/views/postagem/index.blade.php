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

        postagens <br>
    @foreach ($postagem as $values)
        <p>Postagem {{ $values->id }} - {{$values->titulo}}</p>
    @endforeach
<a href="{{route('/create')}}">logoar</a>
</body>
</html>
