<?php
include '../bncDados/conexao.php';

// Função para validar CPF
function validarCPF($cpf) {
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    if (strlen($cpf) != 11) {
        return false;
    }

    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['Nome'];
    $idade = $_POST['Idade'];
    $cpf = $_POST['Cpf'];
    $rg = $_POST['Rg'];
    $numMatricula = $_POST['numMatricula'];
    $dtNascimento = $_POST['dtNascimento'];
    $email = $_POST['Email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
    // Verificar se o número de matrícula tem 11 dígitos
    if (strlen($numMatricula) !== 11) {
        echo "O número de matrícula deve ter exatamente 11 dígitos.";
        exit();
    }
    // Verificar se o CPF é válido
    if (!validarCPF($cpf)) {
        echo "CPF inválido.";
        exit();
    }
    // Verificar se o email já está registrado
    $sql_email = "SELECT * FROM usuario WHERE email = '$email'";
    $result_email = $conn->query($sql_email);
    if ($result_email->num_rows > 0) {
        echo "Email já registrado. Por favor, use um email diferente.";
        exit();
    }
    // Verificar se o número de matrícula já está registrado
    $sql_numMatricula = "SELECT * FROM usuario WHERE numMatricula = '$numMatricula'";
    $result_numMatricula = $conn->query($sql_numMatricula);
    if ($result_numMatricula->num_rows > 0) {
        echo "Número de matrícula já registrado. Por favor, use um número de matrícula diferente.";
        exit();
    }
    // Inserir o usuário no banco de dados
    $sql = "INSERT INTO usuario (nome, idade, cpf, rg, numMatricula, dtNascimento, email, senha) VALUES ('$nome', '$idade', '$cpf', '$rg', '$numMatricula', '$dtNascimento', '$email', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
