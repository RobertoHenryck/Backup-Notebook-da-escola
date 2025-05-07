<?php
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 2\config.php';
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 2\Controller\Controller.php';

$Controller = new Controller($pdo);
$produtos = $Controller->listarproduto();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produto</title>
</head>
<body>

    <h1>Lista</h1>

    <div>

        <?php if (isset($produtos) && is_array($produtos) && count($produtos) > 0): ?>
            <table>
                <thead>
                    <tr>
                        
                        <th>Nome do Produto</th>
                        <th>Descricao</th>
                        <th>preco</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produtos): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($produtos['Nome_Produto']); ?></td>
                            <td><?php echo htmlspecialchars($produtos['descricao']); ?></td>
                            <td><?php echo htmlspecialchars($produtos['preco']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="botoes">
                <a href="Cadastrar.php">Cadastrar Usuario</a>
                <br>
        <?php else: ?>
            <p>#</p>
        <?php endif; ?>
    </div>
</body>

</html>