<?php 
include_once "conexao.php";
$cpf = $_POST["cpf"];

$query = $mysqli->query("select*from tbcliente where cpf={$cpf}");

while($tbcliente = $query->fetch_assoc()){
	echo "Nome do cliente : ".$tbcliente["nome"];
   echo "</br>";
	echo "Email : ".$tbcliente["email"];
   echo "</br>";
	echo "CPF : ".$tbcliente["cpf"];
   echo "</br>";
	echo "CEP : ".$tbcliente["cep"];
   echo "</br>";
	echo "Celular : ".$tbcliente["celular"];
   echo "</br>";
}

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body id="centro">
</body>
</html>