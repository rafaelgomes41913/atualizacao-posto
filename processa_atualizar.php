<?php
session_start();
include_once("conexao.php");

$cod_posto = filter_input(INPUT_POST, 'cod_posto', FILTER_SANITIZE_NUMBER_INT);
$bandeira_posto = filter_input(INPUT_POST, 'bandeira', FILTER_SANITIZE_STRING);
$nome_posto = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cnpj_posto = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_NUMBER_INT);
$num_posto = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_NUMBER_INT);
$email_posto = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha_posto = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$cep_posto = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
$estado_posto = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_NUMBER_INT);
$cidade_posto = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_NUMBER_INT);
$bairro_posto = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_NUMBER_INT);
$rua_posto = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_NUMBER_INT);
$telefone_posto = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);



echo "Nome: $nome_posto <br>";
echo "E-mail: $email_posto <br>";

$result_posto = "UPDATE tbl_posto SET CEP='$cep_posto',COD_ESTADO='$estado_posto',COD_CIDADE='$cidade_posto',COD_BAIRRO='$bairro_posto',COD_RUA='$rua_posto',SENHA='$senha_posto',CNPJ='$cnpj_posto',NOME_POSTO='$nome_posto',BANDEIRA='$bandeira_posto',NUM_POSTO='$num_posto',EMAIL='$email_posto',TELEFONE='$telefone_posto' WHERE COD_POSTO='1'";
$resultado_posto = mysqli_query($conn, $result_posto);
