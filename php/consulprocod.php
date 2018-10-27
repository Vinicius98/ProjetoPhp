<?php
include_once "conexao.php";
$codproduto = $_POST["codproduto"];

$query = $mysqli->query("select*from tbproduto where codproduto='$codproduto'");

while ($tbproduto = $query->fetch_assoc()) {
	echo "Codigo do produto : ".$tbproduto["codproduto"];
	echo "</br>";
	echo "Nome : ".$tbproduto["nome"];
	echo "</br>";
	echo "Quantidade : ".$tbproduto["quant"];
	echo "</br>";
	echo "Preco : ".$tbproduto["preco"];
	echo "</br>";
}
?>

<html>
<head>
	<title></title>
</head>
<body text="#000">
	<a href="../index.php" target="_top">Voltar no inicio</a>
</body>
</html>