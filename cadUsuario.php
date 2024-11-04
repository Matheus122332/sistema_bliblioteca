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
$nome = $POST ['nome'];
$idade = $POST ['idade'];
$cpf = $POST ['cpf'];
$rg = $POST ['rg'];
$numMatricula = $POST ['numMatricula'];
$dtNascimento = $POST ['dtNascimento'];
$email = $POST ['email'];
$senha = $POST ['senha'];
?>