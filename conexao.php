<?php
$host = "192.168.56.105";
$usuario = "camila";
$senha = "1234";
$banco = "prensadao";
//$host = "sql103.ezyro.com";
//$usuario = "ezyro_42225323";
//$senha = "camila1908";
//$banco = "ezyro_42225323_prensadao";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar com o banco: " . mysqli_connect_error());
}
?>