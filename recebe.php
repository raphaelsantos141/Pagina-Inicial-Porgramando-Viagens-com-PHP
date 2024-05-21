<?php

use LDAP\Result;

include_once('config.php');

$nome = $_POST['Nome'];
$email = $_POST['email'];
$telefone = $_POST['Telefone'];
$password = $_POST['password'];
$sexo = $_POST['Genero'];
$data_nasc = $_POST['data_nascimento'];
$cidade = $_POST['Cidade'];
$estado = $_POST['Estado'];
$endereco = $_POST['Endereço'];

$result = mysqli_query($conexao, "INSERT INTO system_user(nome,email,telefone,senha,sexo,data_nasc,cidade,estado,endereço) 
VALUES ('$nome','$email','$telefone','$password','$sexo','$data_nasc','$cidade','$estado','$endereco')");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recebe.css">
    <title>formulario preenchido </title>
</head>
<body>
  <div class="msg_cadastro">
    <h1>PARABÉNS</h1>
    <h2>Usuário cadastrado com sucesso!</h2>
    <a href="login.php">Login</a><br>
    <a href="usuarios.php">Lista de usuários</a>
  </div>
</body>
</html>