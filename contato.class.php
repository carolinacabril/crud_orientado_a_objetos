<?php
class Contato {

    private $pdo;
    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=crudoo;host=localhost","root","");
    }
    
    public function adicionar($email,$nome, $telefone = ''){
        if($this->existeEmail($email) == false){
            $sql = "INSERT INTO contatos SET nome = :nome, email = :email, telefone = :telefone"; 
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':telefone', $telefone);
            $sql->execute();
            
            return true;
        }else{
            return false;
        }
    }
    
    public function getInfo($id){
        $sql = "SELECT * FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            return $sql->fetch();
        }else{
            return array();
        }
    }
    
    public function getAll(){
        $sql = "SELECT * FROM contatos";
        $sql = $this->pdo->query($sql);
        
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        }else{
            return array();
        }
    }
    
    public function editar($nome,$telefone,$id){
            $sql = "UPDATE contatos SET nome = :nome, telefone = :telefone WHERE id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':telefone', $telefone);
            $sql->bindValue(':id', $id);
            $sql->execute();    

    }
    
    public function excluir($id){
        $sql = "DELETE FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    
    private function existeEmail($email){
        $sql = "SELECT * FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    
}

?>