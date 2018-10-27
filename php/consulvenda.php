<?php
include_once "conexao.php"; 
$codvenda = $_POST["codvenda"];

$query = $mysqli->query("select*from tbvenda where codvenda='$codvenda'");
if (!$query){
	echo "Erro".mysql_error();
}else{
	
}

while ($tbvenda = $query->fetch_assoc()) {
	echo "Codigo de venda : ".$tbvenda["codvenda"];
	echo "</br>";
    echo "CPF : ".$tbvenda["cpf"];
    echo "</br>";
    echo "Nome do cliente : ".$tbvenda["nomecliente"];
    echo "</br>";
	echo "Email : ".$tbvenda["email"];
	echo "</br>";
	echo "Livro : ".$tbvenda["livro1"];
	echo "</br>";
	echo "Preco : ".$tbvenda["preco1"];
	echo "</br>";
	echo "Quantidade : ".$tbvenda["quant1"];
	echo "</br>";
	echo "Livro : ".$tbvenda["livro2"];
	echo "</br>";
	echo "Preco : ".$tbvenda["preco2"];
	echo "</br>";
	echo "Quantidade : ".$tbvenda["quant2"];
	echo "</br>";
	echo "Forma de pagamento : ".$tbvenda["formapaga"];
	echo "</br>";
	echo "Bandeira : ".$tbvenda["bandeira"];
	echo "</br>";
	echo "Numero de cartao : ".$tbvenda["numcartao"];
	echo "</br>";
	echo "Nome do cartao : ".$tbvenda["nomecartao"];
	echo "</br>";
	echo "Validade : ".$tbvenda["validade"];
	echo "</br>";
	echo "Codigo de segurança : ".$tbvenda["codseg"];
	echo "</br>";
	echo "Subtotal : ".$tbvenda["subtotal"];
	echo "</br>";
	echo "Total : ".$tbvenda["ttotal"];
	echo "</br>";
}
?>