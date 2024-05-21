<?php
    
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereço'];
        
        $sqlInsert = "UPDATE system_user 
        SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereço='$endereco'
        WHERE id=$id";
        $result=$conexao->query($sqlInsert);

    if($result) {
        header('Location: confirma_edicao.php');
        exit();
    } else {
        echo "Erro ao atualizar o registro.";
    }
}
?>