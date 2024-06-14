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
    <title>Cadastro de clientes</title>
</head>
<body>
    <p class="h1">Cadastro de clientes</p>
    <form method="post" action="clientes_cadastro_salvar.php">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua dos Bobos, nº 0">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="form-group col-md-4">
            <label for="estado">Estado</label>
            <select id="estado" name="estado" class="form-control">
                <option selected>Escolher...</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000">
            </div>
            <div class="form-group col-md-2">
            <label for="inputCEP">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="e-mail">
            </div>
            <div class="form-group col-md-2">
            <label for="inputCEP">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(DDD) XXXX-XXXX">
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</body>
</html>