<?php
include '../bncDados/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM livros WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Livro excluído com sucesso!";
    } else {
        echo "Erro ao excluir livro: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID do livro não fornecido.";
}
?>
