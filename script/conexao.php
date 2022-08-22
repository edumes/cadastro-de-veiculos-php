<?php

$usuario = 'root';
$senha = '';
$database = 'veiculos';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);
$conn = mysqli_connect($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
    
?>