<?php
    include ('config.php');
    include ('header.php');
    
    if(!isset($_GET['id'])){
        echo"Usuário não informado";
        exit();
    }
    
    $id_assinatura = $_GET['id'];
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include ('config.php');
        include ('header.php');        
        $id_cliente=$_POST['id_cliente'];
        $plano=$_POST['plano'];
        $data_inicio=$_POST['data_inicio'];
        $data_fim=$_POST['data_fim'];
        $data_atualizacao=date("Y-m-d H:i:s");
        $status=$_POST['status'];

        $sql = "UPDATE assinaturas SET id_cliente='$id_cliente', plano='$plano', data_inicio='$data_inicio', data_fim='$data_fim', data_atualizacao='$data_atualizacao', status='$status' WHERE id_assinatura='$id_assinatura'";
    
        if($conn->query($sql)==TRUE){
            header('location:assinaturas_listar.php');
        }else{
            echo "Erro ao editar";
        }
    }
?>