
<?php

if(!empty($_GET['id'])){



    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        while($user_data = mysqli_fetch_assoc($result)){
            $login = $user_data['login'];
            $senha = $user_data['senha'];
        }

    }else{
        header("Location:usuarios.php");
    }



}else{
    header('Location: usuarios.php');
}
?>