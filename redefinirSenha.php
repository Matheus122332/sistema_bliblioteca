<?php
if (!isset($_GET['identificacao'])) {
    die("Erro: Identificação não fornecida.");
}
$identificacao = $_GET['identificacao'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
</head>
<body>
    <h2>Redefinir Senha</h2>
    <form action="atualizarSenha.php" method="POST">
        <input type="hidden" name="identificacao" value="<?php echo htmlspecialchars($identificacao); ?>">
        <label for="senha">Nova Senha:</label>
        <input type="password" id="senha" name="senha" required><br>
        <label for="confirmar_senha">Confirmar Senha:</label>
        <input type="password" id="confirmar_senha" name="confirmar_senha" required><br>
        <input type="submit" value="Redefinir Senha">
    </form>
</body>
</html>
