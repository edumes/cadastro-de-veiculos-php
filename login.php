<?php
    include('./script/conexao.php');

    $usuario_vazio = "n";
    $senha_vazio = "n";

    if(isset($_POST['usuario']) || isset($_POST['senha'])) {
    
        if(strlen($_POST['usuario']) == "") {
            $usuario_vazio = "s";
        } else if(strlen($_POST['senha']) == "") {
            $usuario_vazio = "s";
        } else {
            $usuario = $mysqli->real_escape_string($_POST['usuario']);
            $senha = $mysqli->real_escape_string($_POST['senha']);
    
            $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha no SQL: " . $mysqli->error);
    
            $quantidade = $sql_query->num_rows;
    
            if($quantidade == 1) {
                
                $usuario = $sql_query->fetch_assoc();
    
                if(!isset($_SESSION)) {
                    session_start();
                }
    
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
    
                header("Location: cadastrar_veiculos.php");
    
            } else {
                echo "<script type='javascript'>alert('Falha ao logar! usuario ou senha incorretos');";
                
            }
    
        }
    
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Login</title>
</head>
<style>
    
    .container {
        height: 445px;
    }
    
    input[type=text], [type=password] {
        width: 100%;
        text-align: center;
        text-transform: uppercase;
        justify-content: center;
        font-size: 15px;
        padding: 10px 10px;
        margin: 8px 0;
        display: inline-block;
        border: 3px solid #32B0EB;
        border-radius: 15px;
        box-sizing: border-box;
    }

    input[type=text], [type=password] {
        text-transform: lowercase;
    }

    .alert {
        padding: 15px;
        border-radius: 15px;
        background-color: yellow;
        color: black;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }

</style>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">

            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" placeholder="Digite seu usuario">
            <br><br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Digite sua senha">
            <br><br>
            <br>
            <input type="submit" value="Entrar">
            <br>
            
            <?php
            if ($usuario_vazio == "s"){
                echo "<form><div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
                <strong>Preencha todos os campos!</strong></div></form>";

            } elseif ($senha_vazio == "s"){
                echo "<form><div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
                <strong>Preencha sua senha!</strong></div></form><br>";
            }
            ?>

        </form>
    </div>
</body>
</html>