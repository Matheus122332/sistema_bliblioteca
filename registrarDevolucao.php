<?php
include '../bncDados/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emprestimo_id = $_POST['emprestimo_id'];
    $data_devolucao = $_POST['data_devolucao'];

    // Registrar a devolução
    $sql_devolucao = "UPDATE emprestimos SET data_devolucao = '$data_devolucao' WHERE id = '$emprestimo_id'";
    if ($conn->query($sql_devolucao) === TRUE) {
        // Atualizar a quantidade disponível do livro
        $sql_livro = "SELECT livro_id FROM emprestimos WHERE id = '$emprestimo_id'";
        $result_livro = $conn->query($sql_livro);
        $emprestimo = $result_livro->fetch_assoc();
        $livro_id = $emprestimo['livro_id'];

        $sql_atualizar = "UPDATE livros SET quantidade_disponivel = quantidade_disponivel + 1 WHERE id = '$livro_id'";
        $conn->query($sql_atualizar);
        echo "Devolução registrada com sucesso!";
    } else {
        echo "Erro ao registrar devolução: " . $conn->error;
    }

    $conn->close();
}
?>
