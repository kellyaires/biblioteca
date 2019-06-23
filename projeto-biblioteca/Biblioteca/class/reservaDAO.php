<?php

require_once('Database.php');
require_once ('reserva.php');

class reservaDAO {

    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function store(reserva $reserva) {
        try {
            $query = $this->conn->prepare(
                    "INSERT into reserva ( idaluno, idlivro, nome_aluno, nome_livro, autor)
                     VALUES(:idaluno, :idlivro, :nome_aluno, :nome_livro, :autor);");

            $query->bindValue(':idaluno', $reserva->idaluno);
            $query->bindValue(':idlivro', $reserva->idlivro);
            $query->bindValue(':nome_aluno', $reserva->nome_aluno);
            $query->bindValue(':nome_livro', $reserva->nome_livro);
            $query->bindValue(':autor', $reserva->autor);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function findAll($idaluno) {
        try {
            $query = $this->conn->prepare(
                    "SELECT idlivro, nome_aluno, nome_livro, autor
                FROM reserva WHERE idaluno = :idaluno");
            
            $query->bindValue(':idaluno', $idaluno);
            $query->execute();
            $reserva = [];

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $reserva[] = $row;
            }
            return $reserva;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

      public function findAlll() {
        try {
            $query = $this->conn->prepare(
                    "SELECT  nome_aluno, nome_livro, autor
                FROM reserva");
            
           
            $query->execute();
            $reserva = [];

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $reserva[] = $row;
            }
            return $reserva;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function find($idaluno) {
        try {
            $query = $this->conn->prepare(
                    "SELECT  nome_livro, autor
                FROM reserva  
                WHERE idaluno = :idaluno ");

            $query->bindValue(':idaluno', $idaluno);
            $query->execute();

            return $reserva = $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    
    public function remove($idlivro) {
        try {
            $query = $this->conn->prepare(
                "DELETE FROM reserva WHERE idlivro = :idlivro");

            $query->bindValue(':idlivro', $idlivro); 
            $query->execute();

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

}

?>