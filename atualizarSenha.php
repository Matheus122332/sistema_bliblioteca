<?php
include '../bncDados/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identificacao = $_POST['identificacao'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    // Verificar se a identificação é email ou número de matrícula
    if (filter_var($identificacao, FILTER_VALIDATE_EMAIL)) {
        $sql = "UPDATE usuario SET senha='$senha' WHERE email='$identificacao'";
    } else {
        $sql = "UPDATE usuario SET senha='$senha' WHERE numMatricula='$identificacao'";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Senha atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar senha.";
    }

    $conn->close();
}
?>
