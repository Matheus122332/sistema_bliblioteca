<?php
include '../bncDados/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['Nome'];
    $idade = $_POST['Idade'];
    $cpf = $_POST['Cpf'];
    $rg = $_POST['Rg'];
    $numMatricula = $_POST['numMatricula'];
    $dtNascimento = $_POST['dtNascimento'];
    $email = $_POST['Email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    $sql = "UPDATE usuario SET nome='$nome', idade='$idade', cpf='$cpf', rg='$rg', numMatricula='$numMatricula', dtNascimento='$dtNascimento', email='$email', senha='$senha' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário atualizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
