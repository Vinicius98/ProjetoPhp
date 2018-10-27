<?php
include_once "conexao.php"; 
$cpf = $_POST["cpf"];
$nome = $_POST["txtnome"];
$email = $_POST["txtemail"];
$cep = $_POST["txtcep"];
$celular = $_POST["txtcelular"];

$alterar = $mysqli->query("UPDATE tbcliente SET nome='$nome',email='$email',cep='$cep',celular='$celular' WHERE cpf='$cpf'");
if($alterar){
	echo "Dados alterados com sucesso </br>";
}else{
	echo "Erro ao alterar";
}
?>
<a href="../index.php" target="_top">Voltar no inicio</a>