<?php 
include_once "conexao.php";
$codvenda = $_POST["codvenda"];
$numcartao = $_POST["numcartao"];
$nomecartao = $_POST["nomecartao"];
$codseg = $_POST["codseg"];

$alterar = $mysqli->query("UPDATE tbvenda SET numcartao='$numcartao',nomecartao='$nomecartao',codseg='$codseg' WHERE codvenda='$codvenda'");
if ($alterar){
	echo "Alterado com sucesso";
}else{
	echo "Erro ao alterar";
}
?>
<a href="../index.php" target="_top">Voltar no inicio</a>