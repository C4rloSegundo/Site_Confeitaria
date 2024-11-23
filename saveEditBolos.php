<?php 
    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $url = $_POST['url'];
        $preco = $_POST['preco'];
        

        $sqlUpdate = "UPDATE bolos SET nome='$nome', url='$url', preco='$preco' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
        
    }
    header("Location: bolos.php");
?>