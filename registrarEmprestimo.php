<?php
include '../bncDados/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_POST['usuario_id'];
    $livro_id = $_POST['livro_id'];
    $data_emprestimo = $_POST['data_emprestimo'];

    // Verificar se o livro está disponível
    $sql_verificar = "SELECT quantidade_disponivel FROM livros WHERE id = '$livro_id'";
    $result_verificar = $conn->query($sql_verificar);
    $livro = $result_verificar->fetch_assoc();

    if ($livro['quantidade_disponivel'] > 0) {
        // Registrar o empréstimo
        $sql_emprestimo = "INSERT INTO emprestimos (usuario_id, livro_id, data_emprestimo) VALUES ('$usuario_id', '$livro_id', '$data_emprestimo')";
        if ($conn->query($sql_emprestimo) === TRUE) {
            // Atualizar a quantidade disponível do livro
            $sql_atualizar = "UPDATE livros SET quantidade_disponivel = quantidade_disponivel - 1 WHERE id = '$livro_id'";
            $conn->query($sql_atualizar);
            echo "Empréstimo registrado com sucesso!";
        } else {
            echo "Erro ao registrar empréstimo: " . $conn->error;
        }
    } else {
        echo "Livro indisponível para empréstimo.";
    }

    $conn->close();
}
?>
