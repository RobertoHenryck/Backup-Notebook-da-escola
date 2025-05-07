<?php
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 1\Model\Model.php';

class Controller
{
    private $Model;

    public function __construct($pdo)
    {
        $this->Model = new Model($pdo);
    }

    public function cadastrousuario($nome, $idade, $sexo, $cidade)
    {
        return $this->Model->cadastrousuario($nome, $idade, $sexo, $cidade);
    }

    public function listarusuario()
    {
        return $this->Model->listarusuario();
    }
}
