
<?php

if(!empty($_GET['id'])){



    include_once('../db/config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){
        while($user_data = mysqli_fetch_assoc($result)){
            $login = $user_data['login'];
            $senha = $user_data['senha'];
        }

    }else{
        header("Location: usuarios.php");
    }



}else{
    header('Location: usuarios.php');
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
        <form action="../db/saveEdit.php" method="POST">
            <h1>Editar Funcionarios</h1>
            <input type="text" value="<?php echo $login ?>" name="login" >
            <br><br>
            <input type="text" value="<?php echo $senha ?>" name="senha">
            <br><br>
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <button name="update" type="submit" id="update" value="Enviar">Enviar</button>
        </form>
    </div>
</body>

</html>