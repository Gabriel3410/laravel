<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postagens</title>

        Postagens:<br>

        </head>
        <body>

        <a href="{{ url('postagem/create') }}">CRIAR</a>

    <table>
    <tr>
        <th>id</th>
        <th>Título</th>
        <th>Visualizar</th>
    </tr>
    @foreach ($postagens as $value)
    <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->titulo }}</td>
        <td><a href="{{ url('postagem/' . $value->id) }}">Visualizar</a></td>
    </tr>
    @endforeach
    </table>

    </body>
</html>
