

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadUsuarios.css">
    <title>Cadastro de Bolos</title>

</head>

<body>
    <div class="form-container">
        <form action="../db/verificarCadastroBolos.php" method="POST">
            <h1>Cadastro de Bolos</h1>
            <input type="text" placeholder="Nome do bolo" name="nome" >
            <br><br>
            <input type="text" placeholder="Url da imagem" name="url">
            <br><br>
            <input type="text" placeholder="Preço" name="preco">
            <br><br>
            <button name="submit" type="submit" id="submit" value="Enviar">Enviar</button>
        </form>
    </div>
</body>

</html>