<?php
session_start();
include_once("config.php");

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$logado = $_SESSION['email'];


$sql = "SELECT * FROM system_user ORDER BY id DESC";

$result = $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Formulário de Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="./imagens/Pagina_Cadastro.png" alt="">
        </div>
        <div class="form">
            <form action="recebe.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de Usuário</h1>
                    </div>
                    <!-- <div class="login-button"> 
                        <button><a href="#">Entrar</a></button>
                    </div>-->
                </div>

                <div class="input-group">
                <div class="input-box">
                    <input type="text" name="Nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <div class="input-box">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="nome" class="labelInput">Email</label>
                </div>
               
                <div class="input-box">
                    <input type="Telefone" name="Telefone" id="Telefone" class="inputUser" required>
                    <label for="nome" class="labelInput">Telefone</label>
                </div>
                    <div class="input-box">
                    <input type="password" name="password" id="password" class="inputUser" required>
                    <label for="nome" class="labelInput">Senha</label>
               </div>

                <div class="input-box">
                    <input type="text" name="Cidade" id="Cidade" class="inputUser" required>
                    <label for="Cidade" class="labelInput">Cidade</label>
                </div>

                <div class="input-box">
                    <input type="text" name="Estado" id="Estado" class="inputUser" required>
                    <label for="Estado" class="labelInput">Estado</label>
                </div>

                <div class="input-box">
                    <input type="text" name="Endereço" id="Endereço" class="inputUser" required>
                    <label for="Endereço" class="labelInput">Endereço</label>

                </div>

                <div>
                <label for="data_nascimento"><b>Data de Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>

                <div>
                  <p>Sexo:</p>
                  <input type="radio" id="Feminino" name="Genero" value="Feminino" required>
                  <label for="Feminino">Feminino</label>
                  
                  <input type="radio" id="Masculino" name="Genero" value="Masculino" required>
                  <label for="Masculino">Masculino</label>
                  
                  <input type="radio" id="Outro" name="Genero" value="Outro" required>
                  <label for="Outro">Outro</label>
                </div>

                <div class="buttons-baixo">
                  <input type="submit" name="sub" id="submit"><br>
                  <a href="index.php">voltar</a><br>
                  <a href="usuarios.php">lista de usuarios</a>
                  <!-- <button><a href="#">voltar</a> </button> -->
                </div>

                    <!-- <div class="input-box"> 
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>-->
            </form>
        </div>
    </div>
</body>

</html>