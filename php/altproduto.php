<?php
include_once "conexao.php";
$codproduto = $_POST["codproduto"];
$nome = $_POST["txtnome"];
$quant = $_POST["txtquant"];
$preco = $_POST["txtpreco"];

$alterar = $mysqli->query("UPDATE tbproduto SET nome='$nome',quant='$quant',preco='$preco' WHERE codproduto='$codproduto'");
if ($alterar){
	echo "Dados alterados com sucesso";
}else{
	echo "Erro ao alterar";
}
?>
<a href="../index.php" target="_top">Voltar no inicio</a>