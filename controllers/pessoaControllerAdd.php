<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_php/models/pessoaModel.php';


$nome = $_POST['nome'];

$pessoa = new Pessoa();

$pessoa->setNome($nome);

$pessoa->criar();
header('location: /crud_php/index.php');
exit();