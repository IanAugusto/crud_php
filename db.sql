CREATE DATABASE crud;

USE crud;

CREATE TABLE pessoa(
    id_pessoa INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);

-- inserindo dados no banco

INSERT INTO pessoas (nome) VALUES ('João'), ('Maria'), ('Carlos'), ('Ana'), ('Pedro'), ('Lucas'), ('Mariana'), ('Fernanda'), ('Rafael');
