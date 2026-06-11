<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "prensadao";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar com o banco: " . mysqli_connect_error());
}
?>