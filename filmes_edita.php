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
    <title>Atualizar cadastro de filme</title>
</head>
<body>
    <?php
        $id_filme = $_GET['id'];
        $sql = "SELECT * FROM filmes WHERE id_filme='$id_filme'";
        $resultado = $conn->query($sql);
        if($resultado->num_rows<=0){
            echo "Filme não encontrado";
            exit();
        }
        $linha=$resultado->fetch_assoc();
    ?>
    <p class="h1">Atualizar registro</p>
    <form method="post" action="filmes_edita_salvar.php?id=<?php echo $linha['id_filme']?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $linha['titulo']?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $linha['descricao']?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Ano de lançamento</label>
            <input type="text" class="form-control" id="ano_lancamento" name="ano_lancamento" value="<?php echo $linha['ano_lancamento']?>">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Gênero</label>
            <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $linha['genero']?>">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Classificação</label>
                <input type="text" class="form-control" id="classificacao" name="classificacao" value="<?php echo $linha['classificacao']?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="<?php echo $linha['status']?>">
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</body>
</html>