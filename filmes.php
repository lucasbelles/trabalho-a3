<?php
    $action = "inserir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>

    <?php  require_once "menu.php"; ?>

    <h1>Bem-vindo a nossa Loja - Filmes</h1>

    <form method="POST" action="salvarFilmes.php?<?php echo $action; ?>">
        <label for="txtNome">Nome:</label>
        <input type="text" name="txtNome" id="input" required />
        <br>
        <label for="txtDiretor">Diretor:</label>
        <input type="text" name="txtDiretor" required />
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>

    <hr>

    <table id="tbl_filmes">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Diretor</th>
        </tr>

        <?php
            include_once 'clsConexao.php';
            $query = "SELECT * FROM filmes";
            $result = Conexao::consultar( $query );

            while( $filmes = mysqli_fetch_array($result)){
                echo '<tr>'; 
                echo '    <td>'.$filmes['id'].'</td>';
                echo '    <td>'.$filmes['nome'].'</td>';
                echo '    <td>'.$filmes['diretor'].'</td>';
                echo '</tr>';
            }
        ?>
        
    </table>


    
</body>
</html>
