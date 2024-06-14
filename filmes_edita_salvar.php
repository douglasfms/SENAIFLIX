<?php
    include ('config.php');
    include ('header.php');

    //Função para testar existência do ID, tentando a função GET
    if(!isset($_GET['id'])){
        echo"Filme não informado";
        exit();
    }

    //Salvando o ID para busca
    $id_filme = $_GET['id'];

    //Salvando os novos dados
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $titulo=$_POST['titulo'];
        $descricao=$_POST['descricao'];
        $ano_lancamento=$_POST['ano_lancamento'];
        $genero=$_POST['genero'];
        $classificacao=$_POST['classificacao'];
        $data_atualizacao=date("Y-m-d H:i:s");
        $status=$_POST['status'];

        $sql = "UPDATE filmes SET titulo='$titulo', descricao='$descricao', ano_lancamento='$ano_lancamento', genero='$genero', classificacao='$classificacao', data_atualizacao='$data_atualizacao', status='$status' 
        WHERE id_filme='$id_filme'";
    
        if($conn->query($sql)==TRUE){
            header('location:filmes_listar.php');
        }else{
            echo "Erro ao editar";
        }
    }
    
?>