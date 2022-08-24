<?php

include_once("../script/conexao.php");

$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);

$cadastra_marca = "INSERT INTO marca (descricao) VALUES ('$marca')";

$resultado_cadastro = mysqli_query($conn, $cadastra_marca);

header("Location: ../consultar_veiculos.php");

//if(mysqli_insert_id($mysqli)){
   //header("Location: consultar_veiculos.php");
//}else{
    //header("Location: cadastrar_veiculos");
//}

?>