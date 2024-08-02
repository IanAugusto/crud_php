<?php 
require_once "/crud_php/config/config.php";

class Conection {
    public static function connect(){
    $conn = new PDO(DRIVE . ":host=" . LOCAL_DO_BANCO . ";dbname=" . NOME_DO_BANCO . ";charset=" . CHARSET , USUARIO, SENHA);
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}