<?php

include_once("conexao.php");

$chassi = filter_input(INPUT_POST, 'chassi', FILTER_SANITIZE_NUMBER_INT);
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_NUMBER_INT);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$proprietario = filter_input(INPUT_POST, 'proprietario', FILTER_SANITIZE_STRING);
$local_emplac = filter_input(INPUT_POST, 'local_emplac', FILTER_SANITIZE_STRING);
$placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
$ano_fab = filter_input(INPUT_POST, 'ano_fab', FILTER_SANITIZE_NUMBER_INT);
$ano_mod = filter_input(INPUT_POST, 'ano_mod', FILTER_SANITIZE_NUMBER_INT);
$renavam = filter_input(INPUT_POST, 'renavam', FILTER_SANITIZE_NUMBER_INT);
$motor = filter_input(INPUT_POST, 'motor', FILTER_SANITIZE_STRING);

//echo "Chassi: $chassi<br>";
//echo "Cor: $cor<br>";
//echo "Modelo: $modelo<br>";
//echo "Marca: $marca<br>";

$cadastra_veiculo = "INSERT INTO veiculos (chassi, cor, modelo, marca, proprietario, local_emplac, placa, ano_fab, ano_mod, renavam, motor) VALUES ('$chassi', '$cor', '$modelo', '$marca', '$proprietario', '$local_emplac', '$placa', '$ano_fab', '$ano_mod', '$renavam', '$motor')";

$resultado_cadastro = mysqli_query($conn, $cadastra_veiculo);

header("Location: ../consultar_veiculos.php");

//if(mysqli_insert_id($mysqli)){
   //header("Location: consultar_veiculos.php");
//}else{
    //header("Location: cadastrar_veiculos");
//}

?>