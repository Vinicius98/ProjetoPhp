<?php
include_once "conexao.php";
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$celular = $_POST["celular"];

$sql = "insert into tbcliente values ('$nome','$email','$cpf','$cep','$celular')";
$incluir = $mysqli->query($sql);
if ($incluir){
	echo "Cadastrado com sucesso";
}else{
	echo "Erro ao cadastrar";
}
?>
<p><a href="../index.php" target="_top">Voltar ao inicio</a></p>