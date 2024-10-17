

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
            <a href="/crud_php/index.php">Home <br></a>
            <a href="/crud_php/views/sign.php">Cadastra-se</a>
        </nav>
    </section>

    <section class="d-flex justify-content-center">
        <section class="m-3 w-50 d-flex justify-content-center">
            <form action="/crud_php/controllers/login.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Logar</button>
                </div>
                <div style="padding-top: 30px;">
                    <p> Não tem conta? <a href="/crud_php/views/sign.php">Cadastra-se aqui!</a></p>
                </div>
            </form>
        </section>
    </section>

</body>

</html>


