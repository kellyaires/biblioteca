<?php

require_once('Database.php');
require_once ('bibliotecario.php');

class bibliotecarioDAO{

    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function store(bibliotecario $bibliotecario) {
        try {
            $query = $this->conn->prepare(
                    "INSERT into bibliotecario ( nome,sobrenome, email, senha)
                     VALUES(:nome,:sobrenome,:email, :senha);");

            $query->bindValue(':nome', $bibliotecario->nome);
            $query->bindValue(':sobrenome', $bibliotecario->sobrenome);
            $query->bindValue(':email', $bibliotecario->email);
            $query->bindValue(':senha', password_hash($bibliotecario->senha, PASSWORD_DEFAULT));
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
     public function findByEmail($email) {
        try {
            $query = $this->conn->prepare("SELECT * FROM bibliotecario WHERE email = :email");
            $query->bindValue(':email', $email);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
      
    
    
    public function login($email, $senha): string {
        $bibliotecario = $this->findByEmail($email);
        if(password_verify($senha, $bibliotecario->senha)) {
            return $bibliotecario->idbibliotecario;
        } else {
            throw new Exception();
        }
    }
    

}

?>