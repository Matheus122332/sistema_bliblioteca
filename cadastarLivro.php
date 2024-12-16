<?php
include '../bncDados/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $ano_publicacao = $_POST['ano_publicacao'];
    $isbn = $_POST['isbn'];
    $quantidade_disponivel = $_POST['quantidade_disponivel'];

    $sql = "INSERT INTO livros (nome, autor, genero, ano_publicacao, isbn, quantidade_disponivel) VALUES ('$nome', '$autor', '$genero', '$ano_publicacao', '$isbn', '$quantidade_disponivel')";

    if ($conn->query($sql) === TRUE) {
        echo "Livro cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
