<?php
include_once "conexao.php"; 
$codvenda = $_POST["codvenda"];

$query = $mysqli->query("select*from tbvenda where codvenda='$codvenda'");
if (!$query){
	echo "Erro".mysql_error();
}else{
	
}

if (!$tbvenda = $query->fetch_assoc()){
   echo "Nao posui esses dados";
	$codvenda = "";
   $cpf = "";
   $nomecliente = "";
	$email = "";
	$livro1 = "";
	$preco1 = "";
	$quant1 = "";
	$livro2 = "";
	$preco2 = "";
	$quant2 = "";
	$formapaga = "";
	$bandeira = "";
	$numcartao = "";
	$nomecartao = "";
	$validade = "";
	$codseg = "";
	$subtotal = "";
	$ttotal = "";
}else{
   $codvenda = $tbvenda["codvenda"];
   $cpf = $tbvenda["cpf"];
   $nomecliente = $tbvenda["nomecliente"];
   $email = $tbvenda["email"];
   $livro1 = $tbvenda["livro1"];
   $preco1 = $tbvenda["preco1"];
   $quant1 = $tbvenda["quant1"];
   $livro2 = $tbvenda["livro2"];
   $preco2 = $tbvenda["preco2"];
   $quant2 = $tbvenda["quant2"];
   $formapaga = $tbvenda["formapaga"];
   $bandeira = $tbvenda["bandeira"];
   $numcartao = $tbvenda["numcartao"];
   $nomecartao = $tbvenda["nomecartao"];
   $validade = $tbvenda["validade"];
   $codseg = $tbvenda["codseg"];
   $subtotal = $tbvenda["subtotal"];
   $ttotal = $tbvenda["ttotal"];
}
?>

<html>
<head>
	<title></title>
   <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
   <form id="forms" action="altvenda.php" method="post">
   	<input type="hidden" name="codvenda" value="<?php echo $codvenda; ?>">
   	 <p>
   	 	Codigo da venda:<?php echo $codvenda; ?>
   	 </p>
   	 <p>
   	 	CPF:<?php echo $cpf; ?>
   	 </p>
   	 <p>
   	 	Nome do cliente:<?php echo $nomecliente; ?>
   	 </p>
   	 <p>
   	 	Email:<?php echo $email; ?>
   	 </p>
   	 <p>
   	 	Livro:<?php echo $livro1; ?>
   	 </p>
   	 <p>
   	 	Preco:<?php echo $preco1; ?>
   	 </p>
   	 <p>
   	 	Quantidade:<?php echo $quant1; ?>
   	 </p>
   	 <p>
   	 	Livro:<?php echo $livro2; ?>
   	 </p>
   	 <p>
   	 	Preco:<?php echo $preco2; ?>
   	 </p>
   	 <p>
   	 	Quantidade:<?php echo $quant2; ?>
   	 </p>
   	 <p>
   	 	Forma de pagamento:<?php echo $formapaga; ?>
   	 </p>
   	 <p>
   	 	Bandeira:<?php echo $bandeira; ?>
   	 </p>
   	 <p>
   	 	Numero do cartao:
   	 	<input type="text" name="numcartao" value="<?php echo $numcartao; ?>">
   	 </p>
   	 <p>
   	 	Nome do cartão:
   	 	<input type="text" name="nomecartao" value="<?php echo $nomecartao; ?>">
   	 </p>
   	 <p>
   	 	Validade:<?php echo $validade; ?>
   	 </p>
   	 <p>
   	 	Codigo de segurança:
   	 	<input type="text" name="codseg" value="<?php echo $codseg; ?>">
   	 </p>
   	 <p>
   	 	Subtotal:<?php echo $subtotal; ?>
   	 </p>
   	 <p>
   	 	Total:<?php echo $ttotal; ?>
   	 </p>
   	 <input class="botao" type="submit" name="Alterar" value="Alterar">
   </form>
</body>
</html>