<?php

$nome = $_POST['txtNome'];
$fabricante = $_POST['txtMarca'];
$modelo = $_POST['txtModelo'];
$ano = $_POST['txtAno'];
$placa = $_POST['txtPlaca'];


include "clsConexao.php";

if( isset( $_REQUEST['inserir']) ){
    $query = "INSERT INTO categorias (nomepessoa) VALUES ( '$nomepessoa' )";
    $query = "INSERT INTO categorias (fabricante) VALUES ( '$fabricante' )";
    $query = "INSERT INTO categorias (modelo) VALUES ( '$modelo' )";
    $query = "INSERT INTO categorias (ano) VALUES ( '$ano' )";
    $query = "INSERT INTO categorias (placa) VALUES ( '$placa' )";
    Conexao::executar( $query );
    header("Location: categorias.php");
}