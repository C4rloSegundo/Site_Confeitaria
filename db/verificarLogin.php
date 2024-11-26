<?php
session_start();


print_r($_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    print_r($login);
    print_r($senha);


    $sql = "SELECT * FROM usuarios where login = '$login' and senha = '$senha'";

    $result = $conexao->query($sql);

    print_r($result);

    if (mysqli_num_rows($result) < 1) {
        echo "Login ou senha incorretos";
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location: ../pages/login.php');
    } else {
        echo "Login e senha corretos";
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('Location: ../pages/usuarios.php');
    }
} else {
    header('Location: ../pages/login.php');
}
