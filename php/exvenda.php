<?php
include_once "conexao.php";
$codvenda = $_POST["codvenda"];

$query = $mysqli->query("DELETE FROM tbvenda WHERE codvenda='$codvenda'");
if ($query){
	echo "Compra cancelada";
}else{
	echo "Erro ao cancelar";
}
?>
<a href="../index.php" target="_top">Voltar no inicio</a>