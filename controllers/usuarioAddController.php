<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_php/models/usuarioModel.php';

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
}

$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$novoUsuario = new usuario();
$novoUsuario->setEmail($email);
$novoUsuario->setSenha($senha);
$novoUsuario->AadUsers();

header('location: /crud_php/views/login.php');
exit();
