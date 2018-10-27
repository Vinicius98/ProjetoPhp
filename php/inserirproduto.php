<?php
include_once "conexao.php";
$codproduto = $_POST["codproduto"];
$livro = $_POST["livro"];
$quant = $_POST["quant"];
$preco = $_POST["preco"];

$mysql = "insert into tbproduto values ('$codproduto','$livro','$quant','$preco')";
$incluir = $mysqli->query($mysql);
if ($incluir){
	echo "Produto cadastrado </br>";
}else{
	echo "Produto nao pode ser cadastrado";
}
?>
<a href="../index.php" target="_top">Voltar no inicio</a>