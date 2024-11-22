<?php  include('editarUsuarios.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadUsuarios.css">
    <title>Cadastro de funcionario</title>

</head>

<body>
    <div class="form-container">
        <form action="saveEdit.php" method="POST">
            <h1>Cadastro de Funcionarios</h1>
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