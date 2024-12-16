<?php
include '../bncDados/conexao.php';

$sql = "SELECT * FROM livros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Lista de Livros</h2>";
    echo "<table>";
    echo "<tr><th>Nome</th><th>Autor</th><th>Gênero</th><th>Ano de Publicação</th><th>ISBN</th><th>Quantidade Disponível</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row['nome'] . "</td>
        <td>" . $row['autor'] . "</td>
        <td>" . $row['genero'] . "</td>
        <td>" . $row['ano_publicacao'] . "</td>
        <td>" . $row['isbn'] . "</td>
        <td>" . $row['quantidade_disponivel'] . "</td>
        <td>
            <a href='editarLivro.php?id=" . $row['id'] . "'>Editar</a>
            <a href='javascript:void(0);' onclick='confirmarExclusao(" . $row['id'] . ")'>Excluir</a>
        </td>
    </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum livro encontrado.";
}

$conn->close();
?>
