<?php
session_start();
// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dadosUsuario"; // Nome do banco de dados
// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
if(isset($_POST["cadastrar"])){
    $nome = $_POST['nome'] ?? "";
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $numMatricula = $_POST['numMatricula'];
    $dtNascimento = $_POST['dtNascimento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "INSERT INTO usuario (nome, idade, cpf, rg,numMatricula, dtNascimento, emai, senha) VALUES ('$nome', '$idade', '$cpf','$rg','$numMatricula','$dtNascimento','$senha')";

}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <section>
        <div class="titulo">
            <h1>Cadastra-se</h1>
        </div>
        <form action="#" method="POST">
            <div class="campos">
                <label for="Nome">Nome:</label>
                <input type="text" name="Nome" id="nome" placeholder="Nome:" required>
            </div>
            <div class="campos">
                <label for="Idade">Idade:</label>
                <input type="number" name="Idade" id="idade" placeholder="Informe sua Idade:" required>
            </div>
            <div class="campos">
                <label for="Cpf">Cpf:</label>
                <input type="text" name="CpF" id="cpf" placeholder="Informe seu cpf:" required>
            </div>
            <div class="campos">
                <label for="Rg">Rg:</label>
                <input type="text" name="Rg" id="rg" placeholder="Informe seu RG:" required>
            </div>
            <div class="campos">
                <label for="numMatricula">Numero da Matricula:</label>
                <input type="text" name="numMatricula" id="numero matricula" placeholder="Informe seu numero da matricula:" required>
            </div>
            <div class="campos">
                <label for="dtNascimento">Data de Nascimento:</label>
                <input type="text" name="dtNascimento" id="dtNascimento" placeholder="Data de Nascimento:" required>
            </div>
            <div class="campos">
                <label for="Email">Email:</label>
                <input type="text" name="Email" id="email" placeholder="Informe seu email:" required>
            </div>
            <div class="campos">
                    <label for="senha">Senha:</label> 
                    <input type="password" id="senha" name="senha" placeholder="Crie uma senha:" required>
                </div>
                <div class="campos"> 
                    <label for="confirmar_senha">Confirmar Senha:</label> 
                    <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirme sua senha:" required aria-required="true"> 
                    <div id="senhaError" class="erro-mensagem" aria-live="polite"></div>
                </div>
                <div class="campos">
                    <input type="submit" value="Criar conta" aria-label="Criar Conta">
                </div>
        </form>
        <p>Já tem uma conta? <a href="#">Faça login</a></p>
    </section>

</body>
</html>