<?php

if(isset($_POST['submit'])){
    print_r($_POST['login']);
    print_r('<br>');
    print_r($_POST['senha']);


    include_once('config.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];


    // $result = mysqli_query($conexao, "INSERT INTO usuarios(login,senha) VALUES ('$login', '$senha')");
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Tela de login</title>

</head>

<body>
    <div>
        <form action="verificarLogin.php" method="POST">
            <h1>Login</h1>
            <input type="text" placeholder="Nome" name="login">
            <br><br>
            <input type="password" placeholder="Senha" name="senha">
            <br><br>
            <button name="submit" type="submit" id="submit" value="Enviar">Enviar</button>
        </form>
    </div>
</body>

</html>