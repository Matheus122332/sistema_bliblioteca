<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
</head>
<body>
    <h2>Recuperar Senha</h2>
    <form action="verificarUsuario.php" method="POST">
        <label for="identificacao">Email ou Número de Matrícula:</label>
        <input type="text" id="identificacao" name="identificacao" required><br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>
