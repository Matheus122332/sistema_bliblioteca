<?php
include '../bncDados/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM usuario WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Usuário não encontrado.";
        exit();
    }
} else {
    echo "ID do usuário não fornecido.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <h2>Editar Usuário</h2>
    <form action="atualizarUsuario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="Nome" value="<?php echo $row['nome']; ?>" required><br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="Idade" value="<?php echo $row['idade']; ?>" required><br>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="Cpf" value="<?php echo $row['cpf']; ?>" required><br>
        <label for="rg">RG:</label>
        <input type="text" id="rg" name="Rg" value="<?php echo $row['rg']; ?>" required><br>
        <label for="numMatricula">Número da Matrícula:</label>
        <input type="text" id="numMatricula" name="numMatricula" value="<?php echo $row['numMatricula']; ?>" required><br>
        <label for="dtNascimento">Data de Nascimento:</label>
        <input type="text" id="dtNascimento" name="dtNascimento" value="<?php echo $row['dtNascimento']; ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="Email" value="<?php echo $row['email']; ?>" required><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>
        <input type="submit" value="Atualizar Usuário">
    </form>
</body>
</html>
