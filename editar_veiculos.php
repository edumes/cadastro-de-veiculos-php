<?php

include('./script/protect.php');
include('./script/conexao.php');

$select_id = "SELECT * FROM veiculos WHERE id = $_GET[id]";
$msqli = mysqli_query($conn, $select_id);

$row_veiculos = mysqli_fetch_assoc($msqli);


$sqlCor = "SELECT * FROM cor";
$cores = $mysqli->query($sqlCor) or die("Falha no SQL: " . $mysqli->error);
$msqliCor = mysqli_query($conn, $sqlCor);
$row_cores = mysqli_fetch_assoc($msqliCor);

$sqlModelo = "SELECT * FROM modelo";
$modelos = $mysqli->query($sqlModelo) or die("Falha no SQL: " . $mysqli->error);
$msqliModelo = mysqli_query($conn, $sqlModelo);
$row_modelos = mysqli_fetch_assoc($msqliModelo);

$sqlMarca = "SELECT * FROM marca";
$marcas = $mysqli->query($sqlMarca) or die("Falha no SQL: " . $mysqli->error);
$msqliMarca = mysqli_query($conn, $sqlMarca);
$row_marcas = mysqli_fetch_assoc($msqliMarca);

$sqlProprietario = "SELECT * FROM proprietario";
$proprietarios = $mysqli->query($sqlProprietario) or die("Falha no SQL: " . $mysqli->error);
$msqliProprietario = mysqli_query($conn, $sqlProprietario);
$row_proprietarios = mysqli_fetch_assoc($msqliProprietario);

$sqlLocal_emplac = "SELECT * FROM local_emplac";
$local_emplacs = $mysqli->query($sqlLocal_emplac) or die("Falha no SQL: " . $mysqli->error);
$msqliLocal_emplac = mysqli_query($conn, $sqlLocal_emplac);
$row_local_emplacs = mysqli_fetch_assoc($msqliLocal_emplac);

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
    <title>.:: Editar Veículo ::.</title>
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
                  <span>Editar Veículo</span>
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
      <div class="form-container">
        <h1>Editar Veículo</h1>
        <form action="script/form_edit.php" method="post">

          <input type="hidden" name="id" value="<?php echo $row_veiculos['id']; ?>">

          <label for="chassi">Chassi:</label>
          <input type="text" name="chassi" id="input" placeholder="9999999999999999" maxlength="16" required value="<?php echo $row_veiculos['chassi']; ?>">

          <br><br>

          <label for="cor">Cor:</label>
          <select name="cor" id="selection">
          <?php if ($cores) :?>
                  <?php foreach ($cores as $cor) : ?>
                  <?php if($cor['idCor'] == $row_veiculos['cor']){ ?>
                    <option selected value='<?php echo $cor['idCor']; ?>'><?php echo $cor['descricao']; ?></option>
                <?php }else{?>
                      <option value="<?php echo $cor['idCor']; ?>"><?php echo $cor['descricao']; ?></option> <?php } ?>
                  <?php endforeach; ?>
              <?php endif; ?>
          </select>
          
          <br><br>

          <label for="modelo">Modelo:</label>
          <select name="modelo" id="selection">
          <?php if ($modelos) :?>
                  <?php foreach ($modelos as $modelo) : ?>
                    <?php if($modelo['idModelo'] == $row_veiculos['modelo']){ ?>
                    <option selected value='<?php echo $modelo['idModelo']; ?>'><?php echo $modelo['descricao']; ?></option>
                <?php }else{?>
                      <option value="<?php echo $modelo['idModelo']; ?>"><?php echo $modelo['descricao']; ?></option> <?php } ?>
                  <?php endforeach; ?>
              <?php endif; ?>
          </select>

          <br><br>

          <label for="marca">Marca:</label>
          <select name="marca" id="selection">
          <?php if ($marcas) :?>
                  <?php foreach ($marcas as $marca) : ?>
                    <?php if($marca['idMarca'] == $row_veiculos['marca']){ ?>
                    <option selected value='<?php echo $marca['idMarca']; ?>'><?php echo $marca['descricao']; ?></option>
                <?php }else{?>
                      <option value="<?php echo $marca['idMarca']; ?>"><?php echo $marca['descricao']; ?></option> <?php } ?>
                  <?php endforeach; ?>
              <?php endif; ?>
          </select>

          <br><br>

          <label for="proprietario">Proprietário:</label>
          <select name="proprietario" id="selection">
          <?php if ($proprietarios) :?>
                  <?php foreach ($proprietarios as $proprietario) : ?>
                    <?php if($proprietario['idProp'] == $row_veiculos['proprietario']){ ?>
                    <option selected value='<?php echo $proprietario['idProp']; ?>'><?php echo $proprietario['descricao']; ?></option>
                <?php }else{?>
                      <option value="<?php echo $proprietario['idProp']; ?>"><?php echo $proprietario['descricao']; ?></option> <?php } ?>
                  <?php endforeach; ?>
              <?php endif; ?>
          </select>

          <br><br>

          <label for="local_emplac">Local Emplac:</label>
          <select name="local_emplac" id="selection">
          <?php if ($local_emplacs) :?>
                  <?php foreach ($local_emplacs as $local_emplac) : ?>
                    <?php if($local_emplac['idLocal_emplac'] == $row_veiculos['local_emplac']){ ?>
                    <option selected value='<?php echo $local_emplac['idLocal_emplac']; ?>'><?php echo $local_emplac['descricao']; ?></option>
                <?php }else{?>
                      <option value="<?php echo $local_emplac['idLocal_emplac']; ?>"><?php echo $local_emplac['descricao']; ?></option> <?php } ?>
                  <?php endforeach; ?>
              <?php endif; ?>
          </select>

          <br><br>

          <label for="placa">Placa:</label>
          <input type="text" name="placa" id="input" placeholder="" maxlength="7" 
          value="<?php echo $row_veiculos['placa']; ?>" required>

          <br><br>

          <label for="ano_fab_mod">Ano Fabricado:</label>
          <input type="number" name="ano_fab" id="input" placeholder="2015" maxlength="4" min="1900" max="2099" step="1" value="<?php echo $row_veiculos['ano_fab']; ?>" required>

          <br><br>

          <label for="ano_fab_mod">Ano Modificado:</label>
          <input type="number" name="ano_mod" id="input" placeholder="2022" maxlength="4" min="1900" max="2099" step="1" value="<?php echo $row_veiculos['ano_mod']; ?>" required>

          <label for="renavam">Renavam:</label>
          <input type="number" name="renavam" id="input" placeholder="00000000000" maxlength="11" required value="<?php echo $row_veiculos['renavam']; ?>">

          <br><br>

          <label for="motor">Motor:</label>
          <input type="number" name="motor" id="input" placeholder="V11" maxlength="15" required value="<?php echo $row_veiculos['motor']; ?>">
          
          <br><br>

           <input type="submit" value="Confirmar">

          <br><br>

        </form>
      </div>
    </div>

    <script src="script/header.js"> </script>
  </body>
</html>
