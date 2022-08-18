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
      height: 450px;
    }

    .content{
      font-size: 30px;
      padding-left: 25%;
      padding-bottom: 10%;
      margin-left: 15 0px;
      justify-content: center;
      color: whitesmoke;
    }

    th{
      text-indent: 15px;
      text-align: left;
      justify-content: left;
    }

    td{
      text-indent: 15px;
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
      margin-left: 15%;
      background-color: #2683ca;
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
              <li class="nav__item active">
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
      <h1>Consultar Veículos</h1>
      <div class="content">
        <div class="table">

      <?php
      //consulta os cadastros
        echo "<table width='40%' border='1'>";
        echo "<tr width='50%'>";
        echo "<th width='50%'>ID</th>";
        echo "<th width='50%'>Chassi</th>";
        echo "<th width='50%'>Cor</th>";
        echo "</tr>";
        
        $sql = "SELECT * FROM veiculos";
        $resultado = mysqli_query($conn, $sql) or die ("erro");
        
        while ($registro = mysqli_fetch_array($resultado)){
          $id = $registro['id'];
          $chassi = $registro['chassi'];
          $cor = $registro['cor'];
          echo "<tr>";
          echo "<td>".$id."</td>";
          echo "<td>".$chassi."</td>";
          echo "<td>".$cor."</td>";
          echo "</tr>";
        }
        echo "</table>";
      ?>

        </div>
      </div>
      <br><br><br>
      <button class="btn">Listar todos os dados / Editar</button>
    </div>
    <script src="script/header.js"></script>
  </body>
</html>
