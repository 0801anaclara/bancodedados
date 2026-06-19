<?php
$nome = $_POST["nome"];
$cgm = $_POST["cgm"];
$tel = $_POST["tel"];
$email = $_POST["email"];

echo $nome;
echo '<br>',$cgm; 
echo '<br>',$email;
echo '<br>',$tel;
include"conectar_db.php";

$sql = "insert into aluno (cgm, nome, telefone, email) values ('$cgm', '$nome', '$telefone', '$email')";
if (mysqli_query($conecta,$sql)){
    echo "Dados inseridos com sucesso";
}else{
    echo "Erro ao inserir dados";
}












?>
