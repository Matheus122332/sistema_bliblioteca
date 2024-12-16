<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
</head>
<body>
    <h2>Login de Usuário</h2>
    <form action="login.php" method="POST">
        <label for="identificacao">Login:</label>
        <input type="text" id="identificacao" name="identificacao" placeholder="email ou numero de matricula" required><br>
        <small>* Pode ser seu email ou número de matrícula</small><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="senha" required><br>
        <input type="submit" value="Login">
    </form>
    <p>Não tem uma conta? <a href="cadUsuario.php">Criar conta</a></p>
</body>
</html>
