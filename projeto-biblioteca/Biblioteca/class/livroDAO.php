
<?php

require_once('Database.php');
require_once ('livro.php');

class livroDAO {

    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function store(livro $livro) {
        try {
            $query = $this->conn->prepare(
                    "INSERT into livro ( nome,autor, data)
                     VALUES(:nome,:autor,:data );");

            $query->bindValue(':nome', $livro->nome);
            $query->bindValue(':autor', $livro->autor);
            $query->bindValue(':data', $livro->data);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function findAll() {
        try {
            $query = $this->conn->prepare(
                    "SELECT  livro.idlivro, livro.nome, livro.autor, livro.data, livro.livro_disponivel, livro.idlivro
                FROM livro");

            $query->execute();
            $livros = [];

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $livros[] = $row;
            }
            return $livros;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function findAlll() {
        try {
            $query = $this->conn->prepare(
                    "SELECT livro.idlivro, livro.nome, livro.autor, livro.data, livro.livro_disponivel
                FROM livro WHERE livro.livro_disponivel = 'sim' ");

            $query->execute();
            $livros = [];

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $livros[] = $row;
            }
            return $livros;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function mostralivro($idlivro) {
        try {
            $query = $this->conn->prepare(
                    "SELECT livro.nome , livro.autor, livro.data 
                FROM livro 
                WHERE livro.idlivro = :idlivro ");

            $query->bindValue(':idlivro', $idlivro);
            $query->execute();

            return $trabalho = $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    
    
    public function updatelivro(livro $livro) {
        try {
            $query = $this->conn->prepare(
                    "UPDATE livro  SET 
                    nome = :nome,
                    autor = :autor,
                    data = :data
                    WHERE idlivro = :idlivro");

            $query->bindValue(':idlivro', $livro->idlivro);
            $query->bindValue(':nome', $livro->nome);
            $query->bindValue(':autor', $livro->autor);
            $query->bindValue(':data', $livro->data);


            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    
     public function remove($idlivro) {
        try {
            $query = $this->conn->prepare(
                "DELETE FROM livro WHERE idlivro = :idlivro");

            $query->bindValue(':idlivro', $idlivro); 
            $query->execute();

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }
   public function updatedi(livro $livro) {
        try {
            $query = $this->conn->prepare(
                    "UPDATE livro  SET 
                    livro_disponivel = :livro_disponivel
                    WHERE idlivro = :idlivro");

            $query->bindValue(':idlivro', $livro->idlivro);
            $query->bindValue(':livro_disponivel', $livro->livro_disponivel);
           


            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    

}

?>