<?php

require_once('Database.php');
require_once ('aluno.php');
//require_once ('curso.php');

class alunoDAO {

    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function store(aluno $aluno) {
        try {
            $query = $this->conn->prepare(
                    "INSERT into aluno ( nome, sobrenome, numero_matricula, senha, email)
                     VALUES(:nome,:sobrenome, :numero_matricula,:senha,:email);");

            $query->bindValue(':nome', $aluno->nome);
            $query->bindValue(':sobrenome', $aluno->sobrenome);
            $query->bindValue(':numero_matricula', $aluno->numero_matricula);
            $query->bindValue(':senha', password_hash($aluno->senha, PASSWORD_DEFAULT));
            $query->bindValue(':email', $aluno->email);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function storeCurso(curso $curso) {
        try {
            $query = $this->conn->prepare(
                    "INSERT into curso(curso, idaluno)
                     VALUES(:curso, LAST_INSERT_ID());
                     ");

            $query->bindValue(':curso', $curso->curso);

            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function mostra() {
        try {
            $query = $this->conn->prepare("SELECT aluno.nome, aluno.sobrenome, aluno.sexo ,aluno.n_matricula,
                aluno.email, curso.curso, aluno.idaluno FROM aluno INNER JOIN curso on
                (aluno.idaluno = curso.idaluno)");
            $query->execute();
            $alunos = [];

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $alunos[] = $row;
            }
            return $alunos;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

     public function mostraAprovado() {
        try {
            $query = $this->conn->prepare("SELECT aluno.nome, aluno.sobrenome, aluno.sexo ,aluno.n_matricula,
                aluno.email, curso.curso, aluno.idaluno FROM aluno INNER JOIN curso on
                (aluno.idaluno = curso.idaluno) WHERE aprova = 2");
            $query->execute();
            $alunos = [];

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $alunos[] = $row;
            }
            return $alunos;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function mostraaluno($idaluno) {
        try {
            $query = $this->conn->prepare(
                    "SELECT aluno.nome , aluno.sobrenome ,aluno.n_matricula 
                FROM aluno 
                WHERE aluno.idaluno = :idaluno ");

            $query->bindValue(':idaluno', $idaluno);
            $query->execute();

            return $trabalho = $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update(aluno $aluno) {
        try {
            $query = $this->conn->prepare(
                    "UPDATE aluno  SET 
                    nome = :nome,
                    sobrenome = :sobrenome,
                    n_matricula = :n_matricula,
                    sexo = :sexo
                    WHERE idaluno = :idaluno");

            $query->bindValue(':idaluno', $aluno->idaluno);
            $query->bindValue(':nome', $aluno->nome);
            $query->bindValue(':sobrenome', $aluno->sobrenome);
            $query->bindValue(':n_matricula', $aluno->n_matricula);
            $query->bindValue(':sexo', $aluno->sexo);

            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function updatecurso(curso $curso) {
        try {
            $query = $this->conn->prepare(
                    "UPDATE curso  SET 
                    curso = :curso
                    WHERE idaluno = :idaluno");

            $query->bindValue(':idaluno', $curso->idaluno);
            $query->bindValue(':curso', $curso->curso);


            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    
    public function remove($idaluno) {
        try {
            $query = $this->conn->prepare(
                "DELETE FROM aluno WHERE idaluno = :idaluno");

            $query->bindValue(':idaluno', $idaluno); 
            $query->execute();

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }
    
      public function remove2($idaluno) {
        try {
            $query = $this->conn->prepare(
                "DELETE FROM curso WHERE idaluno = :idaluno");

            $query->bindValue(':idaluno', $idaluno); 
            $query->execute();

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }
    
       public function aprova($idaluno) {
        try {
            $query = $this->conn->prepare(
                    "UPDATE aluno SET aprova = 2 
                WHERE idaluno = :idaluno");

            $query->bindValue(':idaluno', $idaluno);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
     public function findByEmail($email) {
        try {
            $query = $this->conn->prepare("SELECT * FROM aluno WHERE email = :email");
            $query->bindValue(':email', $email);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
      
    
    
    public function login($email, $senha): string {
        $aluno = $this->findByEmail($email);
        if(password_verify($senha, $aluno->senha)) {
            return $aluno->idaluno;
        } else {
            throw new Exception();
        }
    }
    
     public function find($idaluno) {
        try {
            $query = $this->conn->prepare(
                    "SELECT  idaluno, nome, sobrenome
                FROM aluno  WHERE aluno.idaluno = :idaluno");

            $query->bindValue(':idaluno', $idaluno);
            $query->execute();

            return $aluno = $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    

}
