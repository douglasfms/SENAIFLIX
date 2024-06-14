<?php
    include ('config.php');
    include ('header.php');

    $id_cliente= $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id_cliente='$id_cliente'" ;

    $resultado = $conn->query($sql);
    
    header('location:clientes_listar.php')
?>