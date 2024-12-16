<?php
include '../bncDados/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identificacao = $_POST['identificacao'];

    // Verificar se a identificação é email ou número de matrícula
    if (filter_var($identificacao, FILTER_VALIDATE_EMAIL)) {
        $sql = "SELECT * FROM usuario WHERE email = '$identificacao'";
    } else {
        $sql = "SELECT * FROM usuario WHERE numMatricula = '$identificacao'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirecionar para a página de redefinição de senha com o identificador
        header("Location: redefinirSenha.php?identificacao=" . urlencode($identificacao));
        exit();
    } else {
        echo "Usuário não encontrado.";
    }

    $conn->close();
}
?>
