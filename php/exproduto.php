<?php
include_once "conexao.php";
$codproduto = $_POST["codproduto"];

$excluir = $mysqli->query("DELETE FROM tbproduto WHERE codproduto='$codproduto'");
if ($excluir){
	echo "Produto excluido";
}else{
	echo "Erro ao excluir";
}
?>
<a href="../index.php" target="_top">Voltar no inicio</a>