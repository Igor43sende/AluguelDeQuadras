<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Espaço Esporte</title>
</head>
<body>
    <div class="box">
        <form action="validLogin.php" method="post">
            <div class="inputBox">
                <input type="email" name="email" id="email" class="inputEmail" required>
                <label for="email">E-mail:</label>
                <div class="errorMessageEmail" id="errorEmail"></div>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password" class="inputPassword" required>
                <label for="password">Senha:</label>
                    <i class="fa-regular fa-eye-slash" id="meuIcone00" onclick="togglePassword('password', 'meuIcone00', 'meuIcone01')"></i>
                    <i class="fa-regular fa-eye" id="meuIcone01" style="display: none" onclick="togglePassword('password', 'meuIcone00', 'meuIcone01')"></i>
                    <div class="errorMessagePassword" id="errorPassword"></div>
            </div>
            <div class="errorMessageLogin"></div>
            <input class="inputSubmit" type="submit" name="submit" id="submit" value="Login">
       </form>
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
    
        return true;
    } else {
        // E-mail inválido
        // Exibir mensagem de erro na div do formulário
        var errorMessageElement = document.getElementById('errorEmail');
        errorMessageElement.innerHTML = 'E-mail inválido!';
        errorMessageElement.className = 'error'; // Adiciona a classe de erro para estilização
    
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
    
        return false;
    } else {
        // Senhas válidas
        var errorMessageElement = document.getElementById('errorPassword');
        errorMessageElement.innerHTML = '';
    
        return true;
    }
    }
</script>
</html>