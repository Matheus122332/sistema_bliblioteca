<?php
include '../bncDados/conexao.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['tentativas'])) {
        $_SESSION['tentativas'] = 0;
    }
    if ($_SESSION['tentativas'] >= 3) {
        echo "Muitas tentativas de login. Tente novamente mais tarde.";
        exit();
    }
    $identificacao = $_POST['identificacao'];
    $senha = $_POST['senha'];
    // Verificar se a identificação é email ou número de matrícula
    if (filter_var($identificacao, FILTER_VALIDATE_EMAIL)) {
        $sql = "SELECT * FROM usuario WHERE email = '$identificacao'";
    } else {
        $sql = "SELECT * FROM usuario WHERE numMatricula = '$identificacao'";
    }
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['usuario_id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['tentativas'] = 0;  // Resetar contador de tentativas após login bem-sucedido
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['tentativas']++;
            echo "Senha incorreta.";
        }
    } else {
        $_SESSION['tentativas']++;
        echo "Usuário não encontrado.";
    }

    $conn->close();
}

?>
