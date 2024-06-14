<?php
    include ('config.php');
    include ('header.php');
    $resultado_clientes = $conn->query("SELECT * FROM clientes WHERE status=0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro de assinaturas</title>
</head>
<body>
    <p class="h1">Cadastro de assinaturas</p>
    <form method="post" action="assinaturas_cadastro_salvar.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Cliente</label>
                <select name="id_cliente" id="id_cliente" required>
                    <?php while($cliente = $resultado_clientes->fetch_assoc()):?>
                    <option value="<?php echo $cliente['id_cliente'];?>"> <?php echo $cliente['nome']; ?> </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Plano</label>
                <select name="plano" id="plano">
                    <option value="0">Simples</option>
                    <option value="1">Premium</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Data Início</label>
                <input type="date" class="form-control" id="data_inicio" name="data_inicio">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Data Fim</label>
                <input type="date" class="form-control" id="data_fim" name="data_fim">
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</body>
</html>