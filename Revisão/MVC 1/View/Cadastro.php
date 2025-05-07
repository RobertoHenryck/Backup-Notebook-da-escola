<?php
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 1/config.php';
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 1\Controller\Controller.php';


$Controller = new Controller($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nome = $_POST['nome'];
    $idade = $_POST['idade']; 
    $sexo = $_POST['sexo'];
    $cidade = $_POST['cidade'];

   
    $cadastro = $Controller->cadastrousuario($nome, $idade, $sexo, $cidade);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Cadastro</title>
</head>
<body>
  <center>
    <div class="container">
      <h1>Cadastrar Usuário</h1>

      <form method="POST">
        <label for="name">Nome</label>
        <br>
        <input type="text" name="nome" required />
        <br>

        <label for="idade">Idade</label>
        <br>
        <input type="number" name="idade" required /> 
        <br>

        <label for="sexo">Sexo</label>
        <br>
        <input type="text" name="sexo" required />
        <br>

        <label for="cidade">Cidade</label>
        <br>
        <input type="text" name="cidade" required>
        <br>

        <br>
        <button type="submit">Cadastrar</button>
      </form>
    </div>
  </center>
</body>
</html>
