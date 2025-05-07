<?php
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 2\Model\Model.php';

class Controller
{
    private $Model;

    public function __construct($pdo)
    {
        $this->Model = new Model($pdo);
    }

    public function cadastroproduto( $Nome_Produto, $descricao, $preco)
    {
        return $this->Model->cadastroproduto($Nome_Produto, $descricao, $preco);
    }

    public function listarproduto()
    {
        return $this->Model->listarproduto();
    }
}
