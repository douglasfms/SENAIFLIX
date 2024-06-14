<?php
    include ('config.php');
    include ('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro de filmes</title>
</head>
<body>
    <p class="h1">Cadastro de filmes</p>
    <form method="post" action="filmes_cadastro_salvar.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Ano de lançamento</label>
            <input type="text" class="form-control" id="ano_lancamento" name="ano_lancamento">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Gênero</label>
            <input type="text" class="form-control" id="genero" name="genero">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Classificação</label>
                <input type="text" class="form-control" id="classificacao" name="classificacao">
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</body>
</html>