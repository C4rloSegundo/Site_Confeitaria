
<?php

if(!empty($_GET['id'])){



    include_once('../db/config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM bolos WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        while($user_data = mysqli_fetch_assoc($result)){
            $nome = $user_data['nome'];
            $url = $user_data['url'];
            $preco = $user_data['preco'];
        }

    }else{
        header("Location: .bolos.php");
    }



}else{
    header('Location: bolos.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadUsuarios.css">
    <title>Cadastro de funcionario</title>

</head>

<body>
    <div class="form-container">
        <form action="../db/saveEditBolos.php" method="POST">
            <h1>Editar bolos</h1>
            <input type="text" value="<?php echo $nome ?>" name="nome" >
            <br><br>
            <input type="text" value="<?php echo $url ?>" name="url">
            <br><br>
            <input type="text" value="<?php echo $preco ?>" name="preco">
            <br><br>
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <button name="update" type="submit" id="update" value="Enviar">Enviar</button>
        </form>
    </div>
</body>

</html>