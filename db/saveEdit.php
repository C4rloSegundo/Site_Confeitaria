<?php 
    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        

        $sqlUpdate = "UPDATE usuarios SET login='$login', senha='$senha' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
        
    }
    header("Location: ../pages/usuarios.php");
?>