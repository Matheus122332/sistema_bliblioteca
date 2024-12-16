<?php
include '../bncDados/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $ano_publicacao = $_POST['ano_publicacao'];
    $isbn = $_POST['isbn'];
    $quantidade_disponivel = $_POST['quantidade_disponivel'];

    $sql = "UPDATE livros SET nome='$nome', autor='$autor', genero='$genero', ano_publicacao='$ano_publicacao', isbn='$isbn', quantidade_disponivel='$quantidade_disponivel' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
