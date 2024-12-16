<?php
include '../bncDados/conexao.php';
session_start();

$usuario_id = $_SESSION['usuario_id'] ??"";
$sql = "SELECT l.nome AS livro, e.data_emprestimo, e.data_devolucao
        FROM emprestimos e
        JOIN livros l ON e.livro_id = l.id
        WHERE e.usuario_id = '$usuario_id'
        ORDER BY e.data_emprestimo DESC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Empréstimos</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o seu arquivo CSS, se houver -->
</head>
<body>
    <h2>Histórico de Empréstimos</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Livro</th><th>Data de Empréstimo</th><th>Data de Devolução</th><th>Status</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $status = $row['data_devolucao'] ? "Devolvido" : "Em aberto";
            $data_devolucao = $row['data_devolucao'] ? $row['data_devolucao'] : "N/A";
            echo "<tr>
                    <td>" . htmlspecialchars($row['livro']) . "</td>
                    <td>" . htmlspecialchars($row['data_emprestimo']) . "</td>
                    <td>" . htmlspecialchars($data_devolucao) . "</td>
                    <td>" . htmlspecialchars($status) . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum empréstimo encontrado.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
