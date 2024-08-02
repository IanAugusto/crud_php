<?php 
require_once '/crud_php/models/pessoaModel.php';
$id = $_POST['id'];
$pessoa = new Pessoa($id);
$pessoa->deletar();
header('location: index.php');
exit();