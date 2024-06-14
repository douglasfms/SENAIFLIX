<?php
    include ('config.php');
    include ('header.php');

    $id_assinatura= $_GET['id'];

    $sql = "DELETE FROM assinaturas WHERE id_assinatura='$id_assinatura'" ;

    $resultado = $conn->query($sql);
    
    header('location:assinaturas_listar.php')
?>