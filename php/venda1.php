<?php
include_once "conexao.php";
$codvenda = $_POST["codvenda"];
$cpf = $_POST["cpf"];
$nomecliente = $_POST["nomecliente"];
$email = $_POST["email"];
$livro1 = $_POST["livro1"];
$preco1 = $_POST["preco1"];
$quant1 = $_POST["quant1"];
$livro2 = $_POST["livro2"];
$preco2 = $_POST["preco2"];
$quant2 = $_POST["quant2"];
$formapaga = $_POST["formapaga"];
$bandeira = $_POST["bandeira"];
$numcartao = $_POST["numcartao"];
$nomecartao = $_POST["nomecartao"];
$validade = $_POST["validade"];
$codseg = $_POST["codseg"];
$subtotal = $_POST["subtotal"];
$ttotal = $_POST["ttotal"];
//
$codproduto4 = $_POST["codproduto4"];
$codproduto5 = $_POST["codproduto5"];
$quant4 = $_POST["quant4"];
$quant5 = $_POST["quant5"];
$valor1 = $quant4;
$valor2= $quant5;

$inserir = $mysqli->query("INSERT INTO tbvenda VALUES ('$codvenda','$cpf','$nomecliente','$email','$livro1','$preco1','$quant1','$livro2','$preco2','$quant2','$formapaga','$bandeira','$numcartao','$nomecartao','$validade','$codseg','$subtotal','$ttotal')");
if ($inserir){
	echo "Compra feita com sucesso";
}else{
	echo "Erro ao comprar";
}			
?>
<a href="../index.php" target="_top">Voltar ao inicio</a>