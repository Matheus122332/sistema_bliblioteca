<?php
include '../bncDados/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM livros WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Livro não encontrado.";
        exit();
    }
} else {
    echo "ID do livro não fornecido.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
</head>
<body>
    <h2>Editar Livro</h2>
    <form action="atualizarLivro.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required><br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="<?php echo $row['autor']; ?>" required><br>
        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" value="<?php echo $row['genero']; ?>" required><br>
        <label for="ano_publicacao">Ano de Publicação:</label>
        <input type="number" id="ano_publicacao" name="ano_publicacao" value="<?php echo $row['ano_publicacao']; ?>" required><br>
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" value="<?php echo $row['isbn']; ?>"><br>
        <label for="quantidade_disponivel">Quantidade Disponível:</label>
        <input type="number" id="quantidade_disponivel" name="quantidade_disponivel" value="<?php echo $row['quantidade_disponivel']; ?>" required><br>
        <input type="submit" value="Atualizar Livro">
    </form>
</body>
</html>
