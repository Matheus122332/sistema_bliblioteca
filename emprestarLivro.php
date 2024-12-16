<?php
include '../bncDados/conexao.php';
$sql_usuarios = "SELECT id, nome FROM usuario";
$result_usuarios = $conn->query($sql_usuarios);
$sql_livros = "SELECT id, nome FROM livros WHERE quantidade_disponivel > 0";
$result_livros = $conn->query($sql_livros);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprestar Livro</title>
    <script defer src="emprestimos.js"></script>
</head>
<body>
    <h2>Emprestar Livro</h2>
    <form id="emprestarLivroForm" action="registrarEmprestimo.php" method="POST">
        <label for="usuario_id">Usuário:</label>
        <select id="usuario_id" name="usuario_id" required>
            <?php while ($row = $result_usuarios->fetch_assoc()): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
            <?php endwhile; ?>
        </select><br>
        
        <label for="livro_id">Livro:</label>
        <select id="livro_id" name="livro_id" required>
            <?php while ($row = $result_livros->fetch_assoc()): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
            <?php endwhile; ?>
        </select><br>
        
        <label for="data_emprestimo">Data de Empréstimo:</label>
        <input type="date" id="data_emprestimo" name="data_emprestimo" required><br>
        
        <input type="submit" value="Registrar Empréstimo">
    </form>
</body>
</html>
