<?php 
require_once 'pessoaModel.php';
$id = $_POST['id'];
$pessoa = new Pessoa($id);
$pessoa->deletar();
header('location: index.php');
exit();