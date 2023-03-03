<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postagens</title>
        </head>
        <body>
 
        CRIAR:<br>

        {!! Form::open(['url' => 'postagem/create']) !!}
        {!! Form::label('titulo', 'Título') !!}<br>
        {!! Form::text('titulo') !!}<br>
        {!! Form::label('conteudo', 'Conteudo') !!}<br>
        {!! Form::text('conteudo') !!}<br>
        {!! Form::submit('Enviar') !!}<br>
        {!! Form::close() !!}
 
    </body>
</html>
