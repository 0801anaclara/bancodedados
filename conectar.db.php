<?php
$localhost = "127.0.0.1:3306";
$user = "root";
$senha = "";
$banco = "elias2aana";

$conecta = mysqli_connect ($localhost,$user,$senha,$banco);

if($conecta) {
    echo "Banco de dados conectado com sucesso";
}else
    (die("conecxao falhou!" .mysqli_connect_error()))






?>
