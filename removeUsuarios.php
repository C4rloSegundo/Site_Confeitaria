<?php 
    include_once('config.php');

    if(isset($_POST['remove'])){
        $id = $_POST['id'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        

        $sqlUpdate = "DELETE FROM usuarios WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
        
    }
    header("Location: usuarios.php");
?>