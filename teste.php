<?php

require_once 'connection.php';

try {
    $connection = Conection::connect();
    echo "Conexão bem-sucedida!";
    $connection = null;  // Fechar a conexão
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}