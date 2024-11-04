CREATE DATABASE dadosUsuario;
CREATE TABLE dadosUsuario;
USE dadosUsuario;
CREATE TABLE dadosUsuario(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome varchar (50) NOT NULL,
    idade INT NOT NULL,
    cpf varchar (20) NOT NULL,
    rg varchar (20) NOT NULL,
    numMatricula varchar (20) NOT NULL,
    dtNascimento varchar (20) NOT NULL,
    email VARCHAR (50) NOT NULL UNIQUE,
    senha varchar (50) NOT NULL
);
