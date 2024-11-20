<?php 

print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
{
    include_once('config.php');
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    print_r($login);
    print_r($senha);


    $sql = "SELECT * FROM usuarios where login = '$login' and senha = '$senha'";

    $result = $conexao->query($sql);

    print_r($result);

    if(mysqli_num_rows($result) < 1)
    {
        echo "Login ou senha incorretos";
        header('Location: login.php');
    }
    else{
        echo "Login e senha corretos";
        header('Location: usuarios.php');
    }

}
else{
    header('Location: login.php');
}
?>