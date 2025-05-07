<?php

require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 1/config.php';

class Model
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function cadastrousuario($nome, $idade, $sexo, $cidade)
    {
        try {
            $sql = "INSERT INTO cadastrar (nome, idade, sexo, cidade) VALUES (:nome, :idade, :sexo, :cidade)";
            $stmt = $this->pdo->prepare($sql);
             $stmt->bindParam(":idade", $idade);
            $stmt->bindParam(":sexo", $sexo);
           $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":cidade", $cidade);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
            return false;
        }
    }

    public function listarusuario()
    {
        try {
            $sql = "SELECT * FROM cadastrar";
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar usuários: " . $e->getMessage();
            return [];
        }
    }
}


$model = new Model($pdo);
