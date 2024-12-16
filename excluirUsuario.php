<?php
include '../bncDados/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM usuario WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário excluído com sucesso!";
    } else {
        echo "Erro ao excluir usuário: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID do usuário não fornecido.";
}
?>
