<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_php/models/pessoaModel.php';

$id = $_POST['id'];

$pessoa = new Pessoa($id);

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
    <section class="m-3">
        <a href="/crud_php/index.php">Voltar</a>
    </section>
    <section class="d-flex justify-content-center">
        <section class="m-3 w-50 d-flex justify-content-center">
            <form action="/crud_php/controllers/pessoaControllerEdit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $pessoa->getId(); ?>">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $pessoa->getNome(); ?>">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </section>
    </section>

</body>

</html>