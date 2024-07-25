<?php 

require_once 'pessoaModel.php';

$nome = $_POST['nome'];
$pessoa = new Pessoa();
$pessoa->setNome($nome);
$pessoa->criar();
header('location: index.php');
exit();