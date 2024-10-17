<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_php/config/connection.php';

class Pessoa {
    private $id_pessoa;
    private $nome;
    

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id_pessoa;
    }

    public function setId($id_pessoa){
        $this->id_pessoa = $id_pessoa;
    }

    public function __construct($id = false)
    {
        if($id){
            $this->id_pessoa = $id;
            $this->load();
        }
    }
    
    public function load(){
        try {
            $connection = Conection::connect();
            $sql = "SELECT * FROM pessoa WHERE id_pessoa = :id";
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(':id', $this->getId());
            $stmt->execute();   
            $result = $stmt->fetch();

            $this->setNome($result['nome']);
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function criar(){
        try {
            $connection = Conection::connect();
            $sql = "INSERT INTO pessoa (nome) VALUES (:nome)";
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(':nome', $this->getNome());            
            $stmt->execute();
            
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public static function listar(){
        try {
            $connection = Conection::connect();
            $sql = "SELECT * FROM pessoa";
            $stmt = $connection->prepare($sql);
            $stmt->execute();
            $lista = $stmt->fetchAll();
            
            return $lista;

        } catch (PDOException $e) {
           echo $e->getMessage();
        }        
    }

    public function deletar(){
        try {
            $connection = Conection::connect();
            $sql = "DELETE FROM pessoa WHERE id_pessoa = :id";
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(':id', $this->getId());
            $stmt->execute();

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function editar(){
        try {
            $connection = Conection::connect();
            $sql = "UPDATE pessoa SET nome = :nome WHERE id_pessoa = :id";
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(':nome', $this->getNome());           
            $stmt->bindValue(':id', $this->getId());
            $stmt->execute();
            
        } catch (PDOException $th) {
             echo $th->getMessage();
        }
    }
}