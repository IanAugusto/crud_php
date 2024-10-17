<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_php/models/pessoaModel.php';
$id = $_POST['id'];
$pessoa = new Pessoa($id);
$pessoa->deletar();
header('location: /crud_php/index.php');
exit();