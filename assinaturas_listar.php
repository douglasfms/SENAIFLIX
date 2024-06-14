<?php
    include ('config.php');
    include ('header.php');
    $sql = "SELECT A.id_assinatura, A.id_cliente, A.plano, A.data_inicio, A.data_fim, A.data_cadastro, A.data_atualizacao, A.status, CL.nome as nome
    FROM assinaturas A
    LEFT JOIN clientes CL ON A.id_cliente=CL.id_cliente";
    $resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Lista de Assinaturas</title>
</head>
<body>
    <p class="h1">Relação de assinaturas</p>
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Cliente</th>
        <th scope="col">Plano</th>
        <th scope="col">Data inicio</th>
        <th scope="col">Data fim</th>
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
                    <td>".$linha['id_assinatura']."</td>
                    <td>".$linha['nome']."</td>
                    <td>".$linha['plano']."</td>
                    <td>".$linha['data_inicio']."</td>
                    <td>".$linha['data_fim']."</td>
                    <td>".$linha['data_cadastro']."</td>
                    <td>".$linha['data_atualizacao']."</td>
                    <td>".$linha['status']."</td>
                    <td><a href='assinaturas_edita.php?id=".$linha['id_assinatura']."'>Editar</a></td>
                    <td><a href='assinaturas_remover.php?id=".$linha['id_assinatura']."'>Remover</a></td>
                </tr>";
            }
        ?>
    </table>
        <a href="assinaturas_cadastro.php">Cadastrar assinaturas</a>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>