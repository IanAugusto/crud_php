<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_php/models/pessoaModel.php';

$id = $_POST['id']; # receber os parâmetros
$nome = $_POST['nome']; 

$pessoa = new Pessoa($id); # set uma nova classe com o id
$pessoa->setNome($nome); # subtitui com o novo nome


$pessoa->editar(); # chama a model para atualizar banco de dados

header('location: /crud_php/index.php'); # retorna a página inicial de lista