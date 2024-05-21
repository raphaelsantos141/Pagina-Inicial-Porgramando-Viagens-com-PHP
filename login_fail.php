<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Tela de login</title>

</head>

<body>

    <div class="page">
        
        <form action="teste_login.php" method="POST" class="formLogin">
        <h1>Login</h1>
        <p>Digite os seus dados de acesso no campo abaixo.</p>
            <input type="text" class="" name="email" placeholder="Email">
            <input type="password" class="" name="senha" placeholder="Senha">
            <p>email ou senha inválida.</p>
            <input class="btn" type="submit" name="submit" value="Enviar">
        </form>
    </div>
    <a href="index.php">Voltar</a>
</body>

</html>