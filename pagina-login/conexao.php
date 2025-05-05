<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cadastropi";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}