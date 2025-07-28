<?php
    session_start();
    //print_r($_SESSION);
    if(!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
        
        echo "É preciso estar logado para acessar essa página";
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
        exit();
    } else {

        include_once('config.php');

        $email = $_SESSION['email'];  // Use a variável de sessão correta
        $nomeusuario = getUserByUsername($email);
        
        $logado = $nomeusuario;
        //print_r($logado);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Esporte</title>
</head>
<body>
    <?php
        echo "<h1>Bem vindo $logado</h1>";
    ?>
</body>
</html>