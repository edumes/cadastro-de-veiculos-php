<?php

include('../script/protect.php');
include('../script/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <title>.:: Cadastro de Local de Emplacação ::.</title>
    <link rel="stylesheet" href="../styles/reset.min.css" />
    <link rel="stylesheet" href="../styles/style.css" />
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

    .container{
      height: 300px;
    }

    select{
      font-size: 25px;
      font-weight: 600;
    }

    option{
      font-size: 23px;
    }

    input[type=submit] {
      font-size: 22px;
    }

  </style>
  <body>
    <!-- Header Start -->
    <header class="site-header">
      <div class="wrapper site-header__wrapper">
        <div class="site-header__start">
          <a href="../cadastrar_veiculos.php"><img src="../assets/logo-default.png" alt="logo"></a>
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
                  <span>Cadastrar Local de Emplacação</span>
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
      <div class="form-container">
        <h1>Cadastrar Local de Emplacação</h1>
        <form action="form_local_emplac.php" method="post">

          <label for="local_emplac">Nome do Local de Emplacação:</label>
          <input type="text" name="local_emplac" id="input" placeholder="Ex: NOVA ODESSA" maxlength="16" required>

          <br><br>

          <a href="./consultar_veiculos.php"> <input type="submit" value="Cadastrar"> </a>

        </form>
      </div>
    </div>

    <script src="script/header.js"> </script>
  </body>
</html>
