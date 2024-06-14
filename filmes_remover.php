<?php
    include ('config.php');
    include ('header.php');

    $id_filme= $_GET['id'];

    $sql = "DELETE FROM filmes WHERE id_filme='$id_filme'" ;

    $resultado = $conn->query($sql);
    
    header('location:clientes_listar.php')
?>