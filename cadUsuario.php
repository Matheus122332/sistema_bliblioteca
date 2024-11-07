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
        </form>
    </section>

</body>
</html>