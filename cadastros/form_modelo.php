<?php

include_once("../script/conexao.php");

$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);

$cadastra_modelo = "INSERT INTO modelo (descricao) VALUES ('$modelo')";

$resultado_cadastro = mysqli_query($conn, $cadastra_modelo);

//header("Location: ./consultar_veiculos.php");

//if(mysqli_insert_id($mysqli)){
   //header("Location: consultar_veiculos.php");
//}else{
    //header("Location: cadastrar_veiculos");
//}

?>