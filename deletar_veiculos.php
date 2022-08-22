<?php
require_once('./script/conexao.php');

$id = $_REQUEST['id'];

$sql = "delete from veiculos where id = '$id'";

mysqli_query($conn, $sql) or die ("Erro na sql");

header("Location: consultar_veiculos.php")

?>