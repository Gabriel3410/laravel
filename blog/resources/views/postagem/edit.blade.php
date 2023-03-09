<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
            body{
                text-align:center;
                background-color:#d9d9d9;
            }
    </style>
    <title>Editar a postagem</title>
</head>
<body>
<form action="#" method="post">
        @csrf   
        @method('PUT')
        <div class="row mb-3">
              
            <div class="form-group">
                <label for="titulo" class="form-label">titulo:</label>
                <input type="text"
                    autofocus
                    name="titulo" 
                    id="titulo" 
                    class="form-control" 
                    value="{{ ($postagem->titulo) }}">
            </div>

            <div class="form-group">
                <label for="conteudo" class="form-label">Conteudo</label>
                <input type="text"
                    name="conteudo" 
                    id="conteudo" 
                    class="form-control" 
                    value="{{ ($postagem->conteudo) }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Alterar</button>
        </form>

        <a class="btn btn-success mt-2" href="{{ route('/postagem') }}">Voltar</a>
</body>
</html>