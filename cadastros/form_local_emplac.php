<?php

include_once("../script/conexao.php");

$local_emplac = filter_input(INPUT_POST, 'local_emplac', FILTER_SANITIZE_STRING);

$cadastra_local_emplac = "INSERT INTO local_emplac (descricao) VALUES ('$local_emplac')";

$resultado_cadastro = mysqli_query($conn, $cadastra_local_emplac);

//header("Location: ./consultar_veiculos.php");

//if(mysqli_insert_id($mysqli)){
   //header("Location: consultar_veiculos.php");
//}else{
    //header("Location: cadastrar_veiculos");
//}

?>