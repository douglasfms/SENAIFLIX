<?php
    include ('config.php');
    include ('header.php');
    $sql = "SELECT * FROM filmes";
    $resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Lista de Filmes</title>
</head>
<body>
    <p class="h1">Relação de filmes</p>
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Título</th>
        <th scope="col">Descrição</th>
        <th scope="col">Ano de lançamento</th>
        <th scope="col">Gênero</th>
        <th scope="col">Classificação</th>
        <th scope="col">Data Cadastro</th>
        <th scope="col">Data atualização</th>
        <th scope="col">Status</th>
        <th scope="col">Editar</th>
        <th scope="col">Remover</th>
        </tr>
    </thead>
    <?php
            while($linha = $resultado->fetch_assoc()){
                echo"<tr>
                    <td>".$linha['id_filme']."</td>
                    <td>".$linha['titulo']."</td>
                    <td>".$linha['descricao']."</td>
                    <td>".$linha['ano_lancamento']."</td>
                    <td>".$linha['genero']."</td>
                    <td>".$linha['classificacao']."</td>
                    <td>".$linha['data_cadastro']."</td>
                    <td>".$linha['data_atualizacao']."</td>
                    <td>".$linha['status']."</td>
                    <td><a href='filmes_edita.php?id=".$linha['id_filme']."'>Editar</a></td>
                    <td><a href='filmes_remover.php?id=".$linha['id_filme']."'>Remover</a></td>
                </tr>";
            }
        ?>
    </table>
        <a href="filmes_cadastro.php">Cadastrar filmes</a>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>