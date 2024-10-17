<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . "/crud_php/config/connection.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/crud_php/models/usuarioModel.php";

session_start();

class Auth {
    public static function logar($email, $senha){ 
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $connection = Conection::connect();
        $stmt = $connection->prepare($sql);
        $stmt->BindValue(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch();
        
        if($usuario && password_verify($senha, $usuario['senha'])){
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['email'] = $usuario['email'];

            header('location: /crud_php/index.php');
            exit();
        } else {
            header('location: /crud_php/login.php');
            exit();
        }
    }

    public static function estaAuntenticado(){
        return isset($_SESSION['id_usuario']);
    }

    public static function logout(){
        session_unset();
        session_destroy();
        header('location: /crud_php/views/login.php');
        exit();
    }
}