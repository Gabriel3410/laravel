<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>
        @foreach ($produto as $item)
            <tr>
                <td>{{ $item->nome}}</td>
                <td>{{ $item->quantidade}}</td>
                <td>{{ $item->valor}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>