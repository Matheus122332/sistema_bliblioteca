<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolução de Livro</title>
</head>
<body>
    <h2>Devolução de Livro</h2>
    <form action="registrarDevolucao.php" method="POST">
        <label for="emprestimo_id">ID do Empréstimo:</label>
        <input type="number" id="emprestimo_id" name="emprestimo_id" required><br>
        <label for="data_devolucao">Data de Devolução:</label>
        <input type="date" id="data_devolucao" name="data_devolucao" required><br>
        <input type="submit" value="Registrar Devolução">
    </form>
</body>
</html>
