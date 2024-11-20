<?php 
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'tela_login';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno){
    echo "erro";
}else{
    echo "conectado";
}

?>