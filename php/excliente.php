<?php
include_once "conexao.php";
$cpf = $_POST["cpf"];

$excluir = $mysqli->query("DELETE FROM tbcliente WHERE cpf='$cpf'");
if ($excluir){
	echo "Conta excluida com  sucesso </br>";
}else{
	echo "Erro ao excluir conta </br>";
}
$excluir1 = $mysqli->query("DELETE FROM tbvenda WHERE cpf='$cpf'");
if ($excluir1){
	echo "Compra cancelada </br>";
}else{
	echo "Erro cancelar";
}
?>
<a href="../index.php" target="_top">Voltar no inicio</a>