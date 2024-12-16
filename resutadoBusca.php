<?php
include '../bncDados/conexao.php';
if (isset($_GET['criterio'])) {
    $criterio = $_GET['criterio'];

    $sql = "SELECT * FROM usuario WHERE nome LIKE '%$criterio%' OR email LIKE '%$criterio%' OR numMatricula LIKE '%$criterio%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Resultados da Busca</h2>";
        echo "<table>";
        echo "<tr><th>Nome</th><th>Email</th><th>Número de Matrícula</th><th>Ações</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['nome'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['numMatricula'] . "</td>
                    <td>
                        <a href='editarUsuario.php?id=" . $row['id'] . "'>Editar</a>
                        <a href='excluirUsuario.php?id=" . $row['id'] . "'>Excluir</a>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum usuário encontrado.";
    }
} else {
    echo "Critério de busca não fornecido.";
}

$conn->close();
?>
