<?php
include '../bncDados/conexao.php';

$sql = "SELECT e.id, u.nome AS usuario, l.nome AS livro, e.data_emprestimo, e.data_devolucao
        FROM emprestimos e
        JOIN usuario u ON e.usuario_id = u.id
        JOIN livros l ON e.livro_id = l.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Lista de Empréstimos</h2>";
    echo "<table>";
    echo "<tr><th>Usuário</th><th>Livro</th><th>Data de Empréstimo</th><th>Data de Devolução</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['usuario'] . "</td>
                <td>" . $row['livro'] . "</td>
                <td>" . $row['data_emprestimo'] . "</td>
                <td>" . $row['data_devolucao'] . "</td>
                <td>
                    <a href='devolverLivro.php?id=" . $row['id'] . "'>Devolver</a>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum empréstimo encontrado.";
}

$conn->close();
?>
