USE dadosUsuario;

CREATE TABLE IF NOT EXISTS livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    ano_publicacao INT NOT NULL,
    isbn VARCHAR(20),
    quantidade_disponivel INT NOT NULL
);
