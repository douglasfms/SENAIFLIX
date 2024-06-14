<?php
    include ('config.php');
    include ('header.php');

    //Função para testar existência do ID, tentando a função GET
    if(!isset($_GET['id'])){
        echo"Usuário não informado";
        exit();
    }

    //Salvando o ID para busca
    $id_cliente = $_GET['id'];

    //Salvando os novos dados
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $nome=$_POST['nome'];
        $cpf=$_POST['cpf'];
        $endereco=$_POST['endereco'];
        $bairro=$_POST['bairro'];
        $cidade=$_POST['cidade'];
        $estado=$_POST['estado'];
        $cep=$_POST['cep'];
        $email=$_POST['email'];
        $telefone=$_POST['telefone'];
        $data_atualizacao=date("Y-m-d H:i:s");
        $status=$_POST['status']; 

        $sql = "UPDATE clientes SET nome='$nome', cpf='$cpf', endereco='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado',
            cep='$cep', email='$email', telefone='$telefone', data_atualizacao='$data_atualizacao', status='$status' WHERE id_cliente='$id_cliente'";
    
        if($conn->query($sql)==TRUE){
            header('location:clientes_listar.php');
        }else{
            echo "Erro ao editar";
        }
    }
    
?>