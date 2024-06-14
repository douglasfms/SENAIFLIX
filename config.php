<?php
$servidor = "localhost";
$usuario = "root";
$senha = ""; 
$banco = "senaiflix_douglas";
//Criando uma conexão com o banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $banco);
//Verificando a conexão
if($conn ->connect_error){
    die("Erro conexão");
}
?>