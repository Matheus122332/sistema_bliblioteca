<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuário</title>
</head>
<body>
    <h2>Buscar Usuário</h2>
    <form action="resultadoBuscaUsuario.php" method="GET">
        <label for="busca">Nome ou Número de Matrícula:</label>
        <input type="text" id="busca" name="busca" placeholder="Digite o nome ou número de matrícula" required><br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
