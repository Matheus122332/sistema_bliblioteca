<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
    <script defer src="livros.js"></script>
</head>
<body>
    <h2>Cadastro de Livro</h2>
    <form id="cadastroLivroForm" action="cadastrarLivro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>
        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" required><br>
        <label for="ano_publicacao">Ano de Publicação:</label>
        <input type="number" id="ano_publicacao" name="ano_publicacao" required><br>
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn"><br>
        <label for="quantidade_disponivel">Quantidade Disponível:</label>
        <input type="number" id="quantidade_disponivel" name="quantidade_disponivel" required><br>
        <input type="submit" value="Cadastrar Livro">
    </form>
</body>
</html>
