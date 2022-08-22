<?php

include_once("../script/conexao.php");

$proprietario = filter_input(INPUT_POST, 'proprietario', FILTER_SANITIZE_STRING);

$cadastra_proprietario = "INSERT INTO proprietario (descricao) VALUES ('$proprietario')";

$resultado_cadastro = mysqli_query($conn, $cadastra_proprietario);

//header("Location: ./consultar_veiculos.php");

//if(mysqli_insert_id($mysqli)){
   //header("Location: consultar_veiculos.php");
//}else{
    //header("Location: cadastrar_veiculos");
//}

?>