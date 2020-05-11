<?php

$nome = $_POST['txtNome'];
$diretor = $_POST['txtDiretor'];

include "clsConexao.php";

if( isset( $_REQUEST['inserir']) ){
    $query = "INSERT INTO filmes (nome, diretor) VALUES ( '$nome', '$diretor' )";
    Conexao::executar( $query );
    header("Location: filmes.php");
}