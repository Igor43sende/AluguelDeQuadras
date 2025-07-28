<?php

    if(isset($_POST['submit'])) {

        include_once('config.php');

        $nomeusuario = $_POST['username'];
        $email = $_POST['email'];
        $senha = $_POST['password'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nomeusuario, email, senha) VALUES('$nomeusuario', '$email', '$senha')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="cadastro.css">
    <title>Espaço Esporte</title>
</head>
<body>
    <div class="container">
        <img src="logoDW.png">
        <p><i>Possui Cadastro?</i><br><a href="login.php"><i>Login</i></a></p><br>
        <div class="box">
            <form action="cadastro.php" method="post">
                <h1>Cadastro:</h1>
                <br>
                <div class="inputBox">
                    <input type="text" name="username" id="username" class="inputs" required>
                    <label for="username" class="labelInput">Usarname:</label>
                    <div class="errorMessageUsername" id="errorUsername"></div>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputs" required>
                    <label for="email" class="labelInput">E-mail:</label>
                    <div class="errorMessageEmail" id="errorEmail"></div>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="password" id="password" class="inputs" required>
                    <label for="password" class="labelInput">Senha:</label>
                        <i class="fa-regular fa-eye-slash" id="meuIcone00" onclick="togglePassword('password', 'meuIcone00', 'meuIcone01')"></i>
                        <i class="fa-regular fa-eye" id="meuIcone01" style="display: none" onclick="togglePassword('password', 'meuIcone00', 'meuIcone01')"></i>
                </div>
                <div class="errorMessagePassword" id="errorPassword"></div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="confirmpassword" id="confirmpassword" class="inputs" required>
                    <label for="confirmpassword" class="labelInput">Confirme sua Senha:</label>
                        <i class="fa-regular fa-eye-slash" id="meuIcone02" onclick="togglePassword('confirmpassword', 'meuIcone02', 'meuIcone03')"></i>
                        <i class="fa-regular fa-eye" id="meuIcone03" style="display: none" onclick="togglePassword('confirmpassword', 'meuIcone02', 'meuIcone03')"></i>
                </div>
                <div class="errorMessageConfirmPassword" id="errorConfirmPassword"></div>
                <br><br>
                <
                <div class="errorMessageCadastro" id="errorCadastro"></div>
                <input type="reset" name="reset" id="reset" value="Cancelar">
                <input type="submit" name="submit" id="submit" value="Cadastrar">
        </form>
        </div>
    </div>
</body>
<script>
    function togglePassword(fieldId, showIconId, hideIconId) {
    var field = document.getElementById(fieldId);
    var showIcon = document.getElementById(showIconId);
    var hideIcon = document.getElementById(hideIconId);

    if (field.type === "password") {
        field.type = "text";
        showIcon.style.display = "none";
        hideIcon.style.display = "inline";
    } else {
        field.type = "password";
        showIcon.style.display = "inline";
        hideIcon.style.display = "none";
    }
}

username.addEventListener('blur', function () {
    // Obtendo o valor atual do campo de username
    var enteredUsername = username.value;

    // Chamando a função validateUsername e armazenando o resultado
    var isUsernameValid = validateUsername(enteredUsername, true);
});

// Função para validar o nome de usuário
function validateUsername(username, allowLastName = false) {
// Lógica de validação do nome de usuário (sem números ou caracteres especiais)
// Adicionalmente, permite a adição de sobrenomes se allowLastName for true
var regex = allowLastName ? /^[a-zA-Z]+(\s[a-zA-Z]+)?$/ : /^[a-zA-Z]+$/;

if (regex.test(username)) {
    // Nome de usuário válido
    // Armazenar no localStorage
    var validUsernames = JSON.parse(localStorage.getItem('validUsernames')) || [];
    validUsernames.push(username);
    localStorage.setItem('validUsernames', JSON.stringify(validUsernames));
    var errorMessageElement = document.getElementById('errorUsername');
    errorMessageElement.innerHTML = '';
    errorMessageElement.style.display = 'none'; // Oculta a div de erro

    return true;
} else {
    // Exibir mensagem de erro na div do formulário
    var errorMessageElement = document.getElementById('errorUsername');
    errorMessageElement.innerHTML = 'Caracteres inválidos!';
    errorMessageElement.className = 'error'; // Adiciona a classe de erro para estilização
    errorMessageElement.style.display = 'block'; // Torna a div de erro visível

    return false; // Nome de usuário inválido
}
}
email.addEventListener('blur', function () {
// Obtendo o valor atual do campo de email
var enteredEmail = email.value;

// Chamando a função validateEmail e armazenando o resultado
var isEmailValid = validateEmail(enteredEmail);
});
// Função para validar o e-mail
function validateEmail(email) {
// Lógica de validação de e-mail usando uma expressão regular
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

if (emailRegex.test(email)) {
    // E-mail válido
    // Armazenar no localStorage
    var validEmails = JSON.parse(localStorage.getItem('validEmails')) || [];
    validEmails.push(email);
    localStorage.setItem('validEmails', JSON.stringify(validEmails));
    var errorMessageElement = document.getElementById('errorEmail');
    errorMessageElement.innerHTML = '';
    errorMessageElement.style.display = 'none'; // Oculta a div de erro

    return true;
} else {
    // E-mail inválido
    // Exibir mensagem de erro na div do formulário
    var errorMessageElement = document.getElementById('errorEmail');
    errorMessageElement.innerHTML = 'E-mail inválido!';
    errorMessageElement.className = 'error'; // Adiciona a classe de erro para estilização
    errorMessageElement.style.display = 'block'; // Torna a div de erro visível
    return false;
}
}
// Adicionando um ouvinte de evento para o evento blur do campo de senha
password.addEventListener('blur', function () {
// Obtendo o valor atual dos campos de senha
var enteredPassword = password.value;

// Chamando a função validatePassword e armazenando o resultado
var isPasswordValid = validatePassword(enteredPassword);
});
// Função para validar a senha
function validatePassword(password) {
// Verifica se as senhas têm pelo menos 8 caracteres
if (password.length < 8) {
    // Exibir mensagem de erro na div do formulário para senhas com menos de 8 caracteres
    var errorMessageElement = document.getElementById('errorPassword');
    errorMessageElement.innerHTML = 'A senha deve ter pelo menos 8 caracteres.';
    errorMessageElement.className = 'error'; // Adiciona a classe de erro para estilização
    errorMessageElement.style.display = 'block'; // Torna a div de erro visível
    return false;
} else {
    // Senhas válidas
    var errorMessageElement = document.getElementById('errorPassword');
    errorMessageElement.innerHTML = '';
    errorMessageElement.style.display = 'none'; // Oculta a div de erro
    return true;
}
}
// Adicionando um ouvinte de evento para o evento blur do campo de senha
confirmpassword.addEventListener('blur', function () {
// Obtendo o valor atual dos campos de senha
var enteredPassword = password.value;
var enteredConfirmPassword = confirmpassword.value;

// Chamando a função validateConfirmPassword e armazenando o resultado
var isConfirmPasswordValid = validateConfirmPassword(enteredConfirmPassword, enteredPassword);
});

function validateConfirmPassword(confirmPassword, password) {
if (password !== confirmPassword) {
    // Exibir mensagem de erro na div do formulário para senhas diferentes
    var errorMessageElement = document.getElementById('errorConfirmPassword');
    errorMessageElement.innerHTML = 'As senhas não coincidem.';
    errorMessageElement.className = 'error'; // Adiciona a classe de erro para estilização
    errorMessageElement.style.display = 'block'; // Torna a div de erro visível
    return false;
} else {
    // Senhas válidas
    var errorMessageElement = document.getElementById('errorConfirmPassword');
    errorMessageElement.innerHTML = ''; // Limpa a mensagem de erro
    errorMessageElement.style.display = 'none'; // Oculta a div de erro

    // Armazenar no localStorage
    var validPasswords = JSON.parse(localStorage.getItem('validPasswords')) || [];
    validPasswords.push(password);
    localStorage.setItem('validPasswords', JSON.stringify(validPasswords));

    return true;
}
}
</script>
</html>