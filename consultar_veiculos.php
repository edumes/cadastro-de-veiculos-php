<?php

include('./script/protect.php');
include('./script/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <title>.:: Cadastro de Veículos ::.</title>
    <link rel="stylesheet" href="styles/reset.min.css" />
    <link rel="stylesheet" href="styles/style.css" />
  </head>

<script type="text/javascript">   

    function excluir_veiculo() {

        if(!confirm('Deseja realmente excluir este veiculo?')

    ){

        if(window.event)

            window.event.returnValue=false;

        else
            
            e.preventDefault();
            
     }

    }

</script>

  <style>
    input[type="text"], [type="number"], [type="select"] {
      font-weight: 900;
      font-size: larger;
    }

    span {
      font-weight: 900;
      font-size: large;
    }
    .container {
      height: 500px;
      width: 580px;
    }

    select{
      font-size: 20px;
      font-weight: 600;
    }

    .custom-select{
      margin-left: 30%;
    }

    .content{
      font-size: 28px;
      padding-left: 0%;
      padding-left: 0%;
      padding-bottom: 10%;
      margin-left: 15 0px;
      justify-content: center;
      color: white;
    }

    table{
      border: 4px solid #32B0EB;
      text-align: center;
      box-shadow: 5px 5px 30px 12px #000000;
    }

    th{
      text-indent: 15px;
      border: 2px solid #32B0EB;
      text-align: left;
      justify-content: left;  
    }

    td{
      text-indent: 15px;
      border: 2px solid #32B0EB;
      text-align: left;
    }

    .btn{
      justify-content: center;
      text-align: center;
      cursor: pointer;
      border-radius: 12px;
      padding-left: 10px;
      padding-right: 10px;
      font-size: 25px;
      font-weight: 700;
      margin-left: 4%;
      background-color: #32B0EB;
    }

    .cadastros{
      margin-left: 30%;
      margin-right: 30%;
      justify-content: center;
      text-align: center;
    }

    button{
      background-color: #32B0EB;
      color: white;
      cursor: pointer;
      font-size: 25px;
      border-radius: 10px;
      margin: 3px 3px 3px;
    }

    button:hover{
      background-color: #266f91;
      margin: 10px 10px 10px;
    }

  </style>
  <body>
    <!-- Header Start -->
    <header class="site-header">
      <div class="wrapper site-header__wrapper">
        <div class="site-header__start">
          <a href="cadastrar_veiculos.php"><img src="assets/logo-default.png" alt="logo"></a>
        </div>
        <div class="site-header__end">
          <nav class="nav">
            <button class="nav__toggle" aria-expanded="false" type="button">
              Menu
            </button>
            <ul class="nav__wrapper">
              <li class="nav__item disabled">
                <a href="cadastrar_veiculos.php">
                  <svg
                    viewBox="0 0 24 24"
                    width="24px"
                    height="24px"
                    x="0"
                    y="0"
                    preserveAspectRatio="xMinYMin meet"
                    class="nav-icon"
                    focusable="false"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                  <path d="M0 0h24v24H0V0z" fill="none"/><path d="M18.92 5.01C18.72 4.42 18.16 4 17.5 4h-11c-.66 0-1.21.42-1.42 1.01L3 11v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.85 6h10.29l1.04 3H5.81l1.04-3zM19 16H5v-4.66l.12-.34h13.77l.11.34V16z"/><circle cx="7.5" cy="13.5" r="1.5"/><circle cx="16.5" cy="13.5" r="1.5"/>
                  </svg>
                  <span>Cadastrar Veículo</span>
                </a>
              </li>
              <li class="nav__item">
              <li class="nav__item active">
                <a href="consultar_veiculos.php">
                  <svg
                    viewBox="0 0 24 24"
                    width="24px"
                    height="24px"
                    x="0"
                    y="0"
                    preserveAspectRatio="xMinYMin meet"
                    class="nav-icon"
                    focusable="false"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                  <path d="M12 4H5C3.34 4 2 5.34 2 7v8c0 1.66 1.34 3 3 3l-1 1v1h1l2-2h2v-5H4V6h9v2h2V7c0-1.66-1.34-3-3-3zM5 14c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm15.57-4.34c-.14-.4-.52-.66-.97-.66h-7.19c-.46 0-.83.26-.98.66l-1.42 4.11v5.51c0 .38.31.72.69.72h.62c.38 0 .68-.38.68-.76V18h8v1.24c0 .38.31.76.69.76h.61c.38 0 .69-.34.69-.72l.01-1.37v-4.14l-1.43-4.11zm-8.16.34h7.19l1.03 3h-9.25l1.03-3zM12 16c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm8 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
                  </svg>
                  <span>Consultar Veículo</span>
                </a>
              </li>
              
              
              <li class="nav__item">
                <a href="login.php">
                  <svg
                    viewBox="0 0 24 24"
                    width="24px"
                    height="24px"
                    x="0"
                    y="0"
                    preserveAspectRatio="xMinYMin meet"
                    class="nav-icon"
                    focusable="false"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                  <path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/>
                  </svg>
                  <span>Login</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!-- Header End -->
    <div class="container">
      <h1>Consultar Veículos <img src="assets/atualizar.png" style="float: right; cursor: pointer;" onclick="window.location.reload()"></h1>
      <br>
      <div class="content">
        <div class="table">

      <?php
      //consulta os cadastros
        echo "<table width='40%' border='1'>";
        echo "<tr width='50%'>";
        echo "<th width='50%'>ID</th>";
        echo "<th width='50%'>Chassi</th>";
        echo "<th width='50%'>Placa</th>";
        echo "<th width='50%'>AnoMod.</th>";
        echo "<th></th>";
        echo "</tr>";
        
        $sql = "SELECT * FROM veiculos";
        $resultado = mysqli_query($conn, $sql) or die ("erro");
        
        while ($registro = mysqli_fetch_array($resultado)){
          $id = $registro['id'];
          $chassi = $registro['chassi'];
          $placa = $registro['placa'];
          $ano_mod = $registro['ano_mod'];
          echo "<tr>";
          echo "<td>".$id."</td>";
          echo "<td>".$chassi."</td>";
          echo "<td>".$placa."</td>";
          echo "<td>".$ano_mod."</td>";
          echo "<td><a href='editar_veiculos.php?id=$registro[id]'><img src='assets/editar.png' style='float: left; cursor: pointer;'> <a href='editar_veiculos.php?id=$registro[id]'></a></td>";
          echo "<td><a href='deletar_veiculos.php?id=$registro[id]' onclick='excluir_veiculo()'><img src='assets/excluir.png' style='float: left; cursor: pointer;'></td>";
          echo "</tr>";
        }
        echo "</table>";
      ?>

      <br>

      <div class="cadastros">
        <h2>Cadastros <img src="./assets//novo.png"></h2>
          <a href="./cadastros/cadastrar_cor.php"><button>Cor</button></a>
          <a href="./cadastros/cadastrar_modelo.php"><button>Modelo</button></a>
          <a href="./cadastros/cadastrar_marca.php"><button>Marca</button></a>
          <a href="./cadastros/cadastrar_proprietario.php"><button>Proprietário</button></a><br>
          <a href="./cadastros/cadastrar_local_emplac.php"><button>Local Emplac.</button></a><br>
      </div>

        </div>
      </div>
    </div>
    <script src="script/header.js"></script>
  </body>
</html>