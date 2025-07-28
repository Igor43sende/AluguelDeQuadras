# Trabalho Desenvolvimento Web

Este projeto é parte de um sistema de aluguel de quadras, desenvolvido como aplicação web utilizando HTML, CSS e PHP.

## Linguagens Utilizadas

- **HTML (HyperText Markup Language):** Utilizado para estruturar o conteúdo das páginas, como formulários, botões e textos.
- **CSS (Cascading Style Sheets):** Responsável por estilizar os elementos HTML, definindo cores, tamanhos, espaçamentos e posicionamento.
- **PHP (Hypertext Preprocessor):** Linguagem de script do lado do servidor usada para processar dados, validar formulários e conectar com bancos de dados.

## Funcionamento Geral dos Códigos

### 1. `index.php`
É a página inicial do sistema, servindo como ponto de entrada para o usuário, geralmente com botões ou links para login, cadastro e aluguéis.

### 2. `login.php` e `validLogin.php`
- `login.php`: Formulário onde o usuário informa suas credenciais.
- `validLogin.php`: Recebe os dados enviados pelo formulário e verifica no banco de dados se o login é válido. Se for, redireciona o usuário para o sistema.

### 3. `cadastro.php`
Formulário de cadastro para novos usuários, onde são inseridos dados como nome, e-mail, senha, etc. Os dados podem ser enviados para o banco de dados via PHP.

### 4. `aluguel.php`
Tela que permite ao usuário visualizar e realizar o aluguel das quadras disponíveis, podendo escolher data e horário.

### 5. `config.php`
Arquivo central para configurações, geralmente contendo dados de conexão com o banco de dados (host, usuário, senha, nome do banco).

### 6. `cadastro.css`
Arquivo de estilo que aplica cores, layout e estética aos formulários e páginas do sistema.

### 7. Imagens (`logoDW.png`, `campoDW.jpg`)
Arquivos de mídia utilizados para tornar a interface mais amigável e visualmente atrativa, como logos e imagens de fundo.

## Como Rodar o Projeto

- **Pré-requisitos

### PHP instalado (ex: XAMPP, WAMP, Laragon ou servidor Apache com suporte a PHP)
### Navegador Web
### Editor de texto/código (opcional)
### Banco de dados (ex: MySQL) configurado conforme esperado no config.php

- **Passos
## Copie a pasta do projeto para o diretório do servidor local
- Exemplo no XAMPP (Windows):
- C:/xampp/htdocs/TrabalhoDW

## Inicie o servidor local
- Ex: Abra o XAMPP e inicie os módulos Apache e MySQL.

## Configure o banco de dados
- Crie um banco de dados com as tabelas esperadas (verifique o conteúdo de config.php para os dados de conexão).
- Caso não haja script SQL incluso, você deve criar as tabelas manualmente.

## Acesse o sistema pelo navegador
- Digite o endereço:
- http://localhost/TrabalhoDW/index.php

## Autor

**Igor Resende Brito**
