<?php

if (!empty($_GET['id'])) {
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT*FROM system_user WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM system_user WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: confirma_exclusao.php');
