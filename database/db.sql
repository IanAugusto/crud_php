CREATE DATABASE crud;

USE crud;

CREATE TABLE pessoa(
    id_pessoa INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    level_acess INT DEFAULT 1
);

-- inserindo dados no banco

INSERT INTO pessoa (nome) VALUES ('João'), ('Maria Clara'), ('Carlos'), ('Pedro'), ('Lucas'), ('Fernando'), ('Rafael');
