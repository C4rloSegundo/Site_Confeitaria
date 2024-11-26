



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadUsuarios.css">
    <title>Cadastro de funcionario</title>

</head>

<body>
    <div class="form-container">
        <form action="verificarCadastroUsuarios.php" method="POST">
            <h1>Cadastro de Funcionarios</h1>
            <input type="text" placeholder="Nome" name="login" >
            <br><br>
            <input type="password" placeholder="Senha" name="senha">
            <br><br>
            <button name="submit" type="submit" id="submit" value="Enviar">Enviar</button>
        </form>
    </div>
</body>

</html>