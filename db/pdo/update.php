<?php

    $conn = new PDO("mysql:dbname=phpudemy;host=localhost", "root", "");

    $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

    $login = "joão";
    $password = "!@#$%¨&*";
    $id = 2;

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);
    $stmt->execute();

    echo "Alterado com sucesso";

?>