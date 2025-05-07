<?php

require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 2\Controller\Controller.php';
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 2\config.php';

class Model
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function cadastroproduto($Nome_Produto, $descricao, $preco)
    {
        try {
            $sql = "INSERT INTO produtos (Nome_Produto, descricao, preco) VALUES (:Nome_Produto, :descricao, :preco)";
            $stmt = $this->pdo->prepare($sql);
             $stmt->bindParam(":Nome_Produto", $Nome_Produto);
            $stmt->bindParam(":descricao", $descricao);
           $stmt->bindParam(":preco", $preco);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar usuário: " . $e->getMessage();
            return false;
        }
    }

    public function listarproduto()
    {
        try {
            $sql = "SELECT * FROM produtos";
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar usuários: " . $e->getMessage();
            return [];
        }
    }
}


$model = new Model($pdo);
