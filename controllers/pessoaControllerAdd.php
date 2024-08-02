<?php 

require_once '/crud_php/models/pessoaModel.php';

$nome = $_POST['nome'];
$pessoa = new Pessoa();
$pessoa->setNome($nome);
$pessoa->criar();
header('location: index.php');
exit();