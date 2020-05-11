<?php
    session_start();
    
    if( isset($_REQUEST['erroNoLogin']) ){
        echo " <script> alert('Usuário ou senha inválidos'); </script> ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Login</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>

    <?php  require_once "menu.php"; ?>

    <h1>Login</h1>

    <?php
        
        if( isset( $_SESSION['logado']) && $_SESSION['logado'] ){
            echo "Olá <strong>".$_SESSION['nome_usuario']. "</strong> seja bem-vindo(a)!";
        }else{
          
    ?>
                <div class="div_login">
                    <form method="POST" action="logar.php" >
                        <label>Usuário:</label>
                        <input type="text" name="user" /> <br>
                        <label>Senha:</label>
                        <input type="password" name="senha" /> <br>

                        <input type="submit" value="Entrar" />
                    </form>
                </div>

    <?php
      }

    ?>



</body>
</html>