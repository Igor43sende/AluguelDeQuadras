<?php

    include_once('config.php');

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cadastro';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao->connect_errno) {
        echo "Erro";
    }
    else {
        echo "Conexão efetuada com sucesso";
    }

    function getUserByUsername($email)
    {
        global $conexao;
    
        $email = mysqli_real_escape_string($conexao, $email);
    
        $sql = "SELECT nomeusuario FROM usuarios WHERE email = '$email'";
        $result = $conexao->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['nomeusuario'];
        } else {
            return false;
        }
    }
    ?>
    