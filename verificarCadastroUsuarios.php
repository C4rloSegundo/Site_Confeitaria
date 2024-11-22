
<?php

if(isset($_POST['submit'])){
    // print_r($_POST['login']);
    // print_r('<br>');
    // print_r($_POST['senha']);


    include_once('config.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios(login,senha) VALUES ('$login', '$senha')";

    $result = $conexao->query($sql);

    print_r($result);



    if($result != 1)
    {
        echo "algo deu errado";
        header('Location: cadUsuarios.php');
    }
    else{
        echo "Login e senha corretos";
        header('Location: usuarios.php');
    }

}else{
    header('Location: usuarios.php');
}
?>