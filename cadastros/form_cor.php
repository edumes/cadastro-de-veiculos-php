<?php

include_once("../script/conexao.php");

$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);

$cadastra_cor = "INSERT INTO cor (descricao) VALUES ('$cor')";

$resultado_cadastro = mysqli_query($conn, $cadastra_cor);

//header("Location: ./consultar_veiculos.php");

//if(mysqli_insert_id($mysqli)){
   //header("Location: consultar_veiculos.php");
//}else{
    //header("Location: cadastrar_veiculos");
//}

?>