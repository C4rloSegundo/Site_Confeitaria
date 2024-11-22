
<?php

if(isset($_POST['submit'])){
    // print_r($_POST['nome']);
    // print_r('<br>');
    // print_r($_POST['url']);


    include_once('config.php');

    $nome = $_POST['nome'];
    $url = $_POST['url'];
    $preco = $_POST['preco'];


    $sql = "INSERT INTO bolos(nome,url,preco) VALUES ('$nome', '$url','$preco')";

    $result = $conexao->query($sql);

    print_r($result);



    if($result != 1)
    {
        echo "algo deu errado";
        header('Location: cadBolos.php');
    }
    else{
        echo "nome e url corretos";
        header('Location: bolos.php');
    }

}else{
    header('Location: bolos.php');
}
?>