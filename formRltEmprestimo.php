<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Empréstimos</title>
</head>
<body>
    <h2>Gerar Relatório de Empréstimos</h2>
    <form action="relatorioEmprestimos.php" method="POST">
        <label for="data_inicio">Data de Início:</label>
        <input type="date" id="data_inicio" name="data_inicio" required><br>
        <label for="data_fim">Data de Fim:</label>
        <input type="date" id="data_fim" name="data_fim" required><br>
        <input type="submit" value="Gerar Relatório">
    </form>
</body>
</html>
