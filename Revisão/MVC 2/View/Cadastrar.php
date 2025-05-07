<?php
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 2\config.php';
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 2\Controller\Controller.php';


$Controller = new Controller($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    $Nome_Produto = $_POST['Nome_Produto'];
    $descricao = $_POST['descricao']; 
    $preco = $_POST['preco'];

    
    $cadastro = $Controller->cadastroproduto($Nome_Produto, $descricao, $preco);
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
      <h1>Cadastrar Produtos</h1>

      <form method="POST">
        <label for="Nome_Produto">Nome Produto</label>
        <br>
        <input type="text" name="Nome_Produto" required />
        <br>

        <label for="descricao">Descrição</label> 
        <br>
        <input type="text" name="descricao" required /> 
        <br>

        <label for="preco">Preço</label>
        <br>
        <input type="text" name="preco" step="0.01" required />
        <br>
        <br>
        <button type="submit">Cadastrar</button>
      </form>
    </div>
  </center>
</body>
</html>
