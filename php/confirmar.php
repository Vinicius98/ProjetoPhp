<?php
$cpf = $_POST["cpf"];
$nomecliente = $_POST["nomecliente"];
$email = $_POST["email"];
$codproduto4 = $_POST["codproduto4"];
$codproduto5 = $_POST["codproduto5"];
$quant4 = $_POST["quant4"];
$quant5 = $_POST["quant5"];
$codvenda = $_POST["codvenda"];
$livro1 = $_POST["livro1"];
$preco1 = $_POST["preco1"];
$quant1 = $_POST["quant1"];
$livro2 = $_POST["livro2"];
$preco2 = $_POST["preco2"];
$quant2 = $_POST["quant2"];
$subtotal = $_POST["total"];
//
$frpaga = $_POST["frpaga"];
$ban = $_POST["bandeira"];
$numcartao = $_POST["numcartao"];
$nomecartao = $_POST["nomecartao"];
$ms = $_POST["mes"];
$an = $_POST["ano"];
$codseg = $_POST["codseg"];
$par = $_POST["parcela"];

if ($frpaga == 1){
	$formapaga = "Cartao de credito";
}else if ($frpaga == 2){
	$formapaga = "Cartao de debito";
}
if ($ban == 1){
	$bandeira = "Visa";
}else if ($ban == 2){
    $bandeira = "Mastercard";
}else if ($ban == 3){
    $bandeira = "American Express";
}else if ($ban == 4){
	$bandeira = "Elo";
}

if ($ms == 0){
	$mes = "";
}else if ($ms == 1){
	$mes = "Janeiro";
}else if ($ms == 2){
	$mes = "Fevereiro";
}else if ($ms == 3){
	$mes = "Março";
}else if ($ms == 4){
	$mes = "Abril";
}else if ($ms == 5){
	$mes = "Maio";
}else if ($ms == 6){
	$mes = "Junho";
}else if ($ms == 7){
	$mes = "Julho";
}else if ($ms == 8){
	$mes = "Agosto";
}else if ($ms == 9){
	$mes = "Setembro";
}else if ($ms == 10){
	$mes = "Outubro";
}else if ($ms == 11){
	$mes = "Novembro";
}else if ($ms == 12){
	$mes = "Dezembro";
}

if ($an == 0){
	$ano = "";
}else if($an == 1){
	$ano = "2018";
}else if($an == 2){
	$ano = "2019";
}else if ($an == 3){
	$ano = "2020";
}else if ($an == 4){
	$ano = "2021";
}else if ($an == 5){
	$ano = "2022";
}else if ($an == 6){
	$ano = "2023";
}
$validade = $mes." de ".$ano;

if ($par == 1){
	$parcela = "1 Parcela S/ Juros";
	$ttotal = $subtotal - ($subtotal  * 0.10); 
}else if ($par == 2){
	$parcela = "2 Parcela S/ Juros";
	$ttotal = $subtotal / 2;
}else if ($par == 3){
	$parcela = "3 Parcela S/ Juros";
	$ttotal = $subtotal / 3;
}else if ($par == 4){
	$parcela = "4 Parcela C/ Juros 5%";
	$ttotal = ($subtotal + ($subtotal * 0.05))/4;
}else if ($par == 5){
	$parcela = "5 Parcela C/ Juros 5%";
	$ttotal = ($subtotal + ($subtotal * 0.05))/5;
}else if ($par == 6){
	$parcela = "4 Parcela C/ Juros 5%";
	$ttotal = ($subtotal + ($subtotal * 0.05))/6;
}
?>

<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body id="centro">
   <table border="1">
   		<tr><th><h3>Dados do cliente</h3></th></tr>
   		<tr><td>Nome: <?php echo $nomecliente; ?></td></tr>
   		<tr><td>Email : <?php echo $email; ?></td></tr>
   		<tr><td>CPF : <?php echo $cpf; ?></td></tr>
   </table>
   <table border="1">
   		<tr><th><h3>Dados da compra</h3></th></tr>
      <tr><td>Codvenda : <?php echo $codvenda; ?></td></tr>
   		<tr><td>Livro : <?php echo $livro1; ?></td></tr>
   		<tr><td>Preco : <?php echo $preco1; ?></td></tr>
   		<tr><td>Quantidade : <?php echo $quant1; ?></td></tr>
   		<tr><td>Livro : <?php echo $livro2; ?></td></tr>
   		<tr><td>Preco : <?php echo $preco2; ?></td></tr>
   		<tr><td>Quantidade : <?php echo $quant2; ?></td></tr>
   </table>
   <table border="1">
   	    <tr><th><h3>Dados do pagamento</h3></th></tr>
   	    <tr><td>Escolha de pagamento : <?php echo $formapaga; ?></td></tr>
   	    <tr><td>CPF : <?php echo $cpf; ?></td></tr>
   	    <tr><td>Bandeira : <?php echo $bandeira ?></td></tr>
   	    <tr><td>Numero do cartao : <?php echo  $numcartao; ?></td></tr>
   	    <tr><td>Nome impresso no cartao : <?php echo $nomecartao; ?></td></tr>
   	    <tr><td>Validade do cartao : <?php echo $validade; ?></td></tr>
   	    <tr><td>Codigo de seguranca : <?php echo $codseg; ?></td></tr>
   	    <tr><td>Subtotal : <?php echo $subtotal; ?></td></tr>
   	    <tr><td>Total da parcela : <?php echo $ttotal; ?></td></tr>
   </table>
   <form id="forms" action="venda1.php" method="post">
   	 	<input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
   		<input type="hidden" name="nomecliente" value="<?php echo $nomecliente; ?>">
   		<input type="hidden" name="email" value="<?php echo $email; ?>">
   		<input type="hidden" name="codproduto4" value="<?php echo $codproduto4; ?>">
   		<input type="hidden" name="codproduto5" value="<?php echo $codproduto5; ?>">
   		<input type="hidden" name="quant4" value="<?php echo $quant4; ?>">
   		<input type="hidden" name="quant5" value="<?php echo $quant5; ?>">
      <input type="hidden" name="codvenda" value="<?php echo $codvenda; ?>">
   		<input type="hidden" name="livro1" value="<?php echo $livro1; ?>">
    	<input type="hidden" name="preco1" value="<?php echo $preco1; ?>">
    	<input type="hidden" name="quant1" value="<?php echo $quant1; ?>">
    	<input type="hidden" name="livro2" value="<?php echo $livro2; ?>">
    	<input type="hidden" name="preco2" value="<?php echo $preco2; ?>">
    	<input type="hidden" name="quant2" value="<?php echo $quant2; ?>">
    	<input type="hidden" name="total"  value="<?php echo $total; ?>">
      <input type="hidden" name="formapaga" value="<?php echo $formapaga; ?>">
      <input type="hidden" name="bandeira" value="<?php echo $bandeira; ?>">
      <input type="hidden" name="numcartao" value="<?php echo $numcartao; ?>">
      <input type="hidden" name="nomecartao" value="<?php echo $nomecartao; ?>">
      <input type="hidden" name="validade" value="<?php echo $validade; ?>">
      <input type="hidden" name="codseg" value="<?php echo $codseg; ?>">
      <input type="hidden" name="subtotal" value="<?php echo $subtotal; ?>">
      <input type="hidden" name="ttotal" value="<?php echo $ttotal; ?>">
    <input class="botao" type="submit" name="Confirmar compra" value="Confirmar compra">
    <a  href="../index.php" target="_top"><input class="botao" type="button" value="Cancelar"></a>
   </form>
</body>
</html>