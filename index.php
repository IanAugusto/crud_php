<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_php/models/pessoaModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_php/auth/auth.php';

$lista = Pessoa::listar();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de usuários</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <section>
        <nav>
            <a href="/crud_php/index.php">Home</a>
            <?php if(Auth::estaAuntenticado()) : ?>
            <a href="/crud_php/views/login.php">Login</a>
            <?php else : ?>
                <a href="/crud_php/controllers/logout.php">Sair</a>
            <?php endif; ?> 
        </nav>   
        <?php if(Auth::estaAuntenticado()) : ?>
        <?php echo "Olá," . $_SESSION['email']?>     
        <?php endif; ?>
    </section>
    <?php if(Auth::estaAuntenticado()) : ?>
    <section class="m-3">
        <table class="table table-dark table-hover">
            <tr>
                <th>Nome:</th>
                <th colspan="2">
                    <a href="/crud_php/views/pessoaView.php" class="btn btn-success">Adicionar</a>
                </th>
            </tr>

            <?php foreach ($lista as $pessoa) : ?>
                <tr>
                    <td><?= $pessoa['nome'] ?></td>
                    <td>
                        <form action="/crud_php/views/pessoaViewEdit.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $pessoa['id_pessoa'] ?>">
                            <button type="submit" class="btn btn-warning">Editar</button>
                        </form>
                    </td>
                    <td>
                        <form action="/crud_php/controllers/pessoaControllerDel.php" method="post" onsubmit="return confirm('Você tem certeza que deseja deletar?')">
                            <input type="hidden" name="id" value="<?php echo $pessoa['id_pessoa'] ?>">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <?php else : ?>
        <h1>Usuário não logado. Realize o login para poder acessar ao site.</h1>
    <?php endif; ?>    
</body>

</html>