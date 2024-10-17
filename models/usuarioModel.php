<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_php/config/connection.php';

class usuario {
    private $id_usuario;
    private $email;
    private $senha;
    private $level_acess;

    public function getIdUser(){
        return $this->id_usuario;
    }

    public function setIdUser($id_usuario){
        return $this->id_usuario = $id_usuario;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        return $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        return $this->senha = $senha;
    }

    public function getLevelAcess(){
        return $this->level_acess;
    }

    public function setLevelAcess($level_acess){
        return $this->level_acess = $level_acess;
    }

    public function __construct($id_usuario = false)
    {
        if($id_usuario){
            $this->id_usuario = $id_usuario;
            $this->loadUser();
        }
    }

    public function loadAllUsers(){
        try {
            $connection = Conection::connect();
            $sql = "SELECT * FROM usuarios";
            $stmt = $connection->prepare($sql);
            $stmt->execute();
            $loadAllUsers = $stmt->fetchAll();
            
            return $loadAllUsers;
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }

    }

    public function loadUser(){
        try{
            $connection = Conection::connect();
            $sql = "SELECT * FROM usuarios WHERE id_pessoa = :id_usuario";
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(':id_usuario', $this->getIdUser());
            $stmt->execute();
            $result = $stmt->fetch();

            $this->setEmail($result['email']);
            $this->setSenha($result['senha']);
            $this->setLevelAcess($result['level_acess']);
            
        } catch(PDOException $th){
            echo $th->getMessage();
        }
    }

    public function AadUsers(){
        try {
            $connection = Conection::connect();
            $sql = "INSERT INTO usuarios (email, senha, level_acess) VALUES (:email, :senha, level_acess)";
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(':email', $this->getEmail());
            $stmt->bindValue(':senha', $this->getSenha());
            $stmt->bindValue(':level_acess', $this->getLevelAcess());
            $stmt->execute();

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function EditUser(){
        try {
            $connection = Conection::connect();
            $sql = "UPDATE usuarios SET email = :email, senha = :senha, level_acess = :level_acess WHERE id_usuario = :id_usuario";
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(':id_usuario', $this->getIdUser());
            $stmt->bindValue(':email', $this->getEmail());
            $stmt->bindValue(':senha', $this->getSenha());
            $stmt->bindValue('level_acess', $this->getLevelAcess());
            $stmt->execute();

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function DeleteUser(){
        try {
            $connection = Conection::connect();
            $sql = "DELETE FROM usuarios WHERE id_usuario = :id_usuario";
            $stmt = $connection->prepare($sql);
            $stmt->bindValue('id_pessoa', $this->getIdUser());
            $stmt->execute();

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
};