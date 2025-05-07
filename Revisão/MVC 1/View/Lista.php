<?php
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 1\config.php';
require_once 'C:\Turma2\xampp\htdocs\Revisão\MVC 1\Controller\Controller.php';

$Controller = new Controller($pdo);
$usuarios = $Controller->listarusuario();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista viagem</title>
</head>
<body>

    <h1>Lista</h1>

    <div>

        <?php if (isset($usuarios) && is_array($usuarios) && count($usuarios) > 0): ?>
            <table>
                <thead>
                    <tr>
                        
                        <th>Nome</th>
                        <th>idade</th>
                        <th>sexo</th>
                        <th>Cidade<th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuarios): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($usuarios['nome']); ?></td>
                            <td><?php echo htmlspecialchars($usuarios['idade']); ?></td>
                            <td><?php echo htmlspecialchars($usuarios['sexo']); ?></td>
                            <td><?php echo htmlspecialchars($usuarios['cidade']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="botoes">
                <a href="MVC 1\View\Cadastro.php">Cadastrar Usuario</a>
                <br>
        <?php else: ?>
            <p>Nenhuma viagem marcada</p>
        <?php endif; ?>
    </div>
</body>

</html>