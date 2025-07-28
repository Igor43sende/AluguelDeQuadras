<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    
        include_once('config.php');

        $email = $_POST['email'];
        $nomeusuario = getUserByUsername($email);
        $senha = $_POST['password'];
        // Verifique se o email existe
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' and nomeusuario = '$nomeusuario'";

        $result = $conexao->query($sql);
        print_r('Username: '. $nomeusuario);
        print_r('<br>');
        print_r('Email:: '. $email);
        print_r('<br>');
        print_r('Senha: '. $senha);
        print_r('<br>');
        print_r($sql);
        print_r('<br>');
        print_r($result);

        if(mysqli_num_rows($result) < 1) {
    
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $senha;
            header('Location: aluguel.php');
        }
    } else {
        header('Location: login.php');
    }
?>