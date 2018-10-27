<?php
$cpf = $_POST["cpf"];
$nomecliente = $_POST["nomecliente"];
$email = $_POST["email"];
$codproduto4 = $_POST["codproduto4"];
$codproduto5 = $_POST["codproduto5"];
$quant4 = $_POST["quant4"];
$quant5 = $_POST["quant5"];
$codvenda = $_POST["codvenda"];
if (isset($_POST["livro1"])){
   $livro1 = $_POST["livro1"];
}else{
    $livro1 = "";
}
if (isset($_POST["preco1"])){
   $preco1 = $_POST["preco1"];
}else{
   $preco1 = 0;
}
if (isset($_POST["quant1"])){
    $quant1 = $_POST["quant1"];
}else{
    $quant1 = 0;
}
if (isset($_POST["livro2"])){
   $livro2 = $_POST["livro2"];
}else{
   $livro2 = "";
}
if (isset($_POST["preco2"])){
   $preco2 = $_POST["preco2"];
}else{
   $preco2 = 0;
}
if (isset($_POST["quant2"])){
  $quant2 = $_POST["quant2"];
}else{
    $quant2 = 0;
}

$total1 = $preco1 * $quant1;
$total2 = $preco2 * $quant2;
$total = $total1 + $total2;

?>

<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
  <form id="forms" action="confirmar.php" method="post">
  	 <h2>Forma de pagamento</h2>		
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
    	<h3>Escolha de pagamento</h3>
    	   <input type="radio" name="frpaga" value="1">Cartao de credito</br>
           <input type="radio" name="frpaga" value="2">Cartao de debito</br>
        <p>
        	CPF:<?php echo $cpf; ?>
        </p>
        <p>
        	Bandeira:
        	  <select name="bandeira">
        	    <option value="1"> Visa </option> 
				<option value="2"> Mastercard </option> 
				<option value="3"> American Express </option>
				<option value="4"> Elo </option>
			 </select>
        </p>
        <p>
        	Numero do cartao:
        	<input type="text" name="numcartao" size="30" maxlength="20">
        </p>
        <p>
        	Nome impresso do cartao:
        	<input type="text" name="nomecartao" size="50" maxlength="60">
        </p>
        <p>
        	Validade:
        	<p>
        	   Mes:
        	   <select name="mes">
        		 	<option value="0">Mês</option> 
					<option value="1">01</option> 
					<option value="2">02 </option>
					<option value="3">03</option>
					<option value="4">04</option> 
					<option value="5">05</option>
					<option value="6">06</option>	
					<option value="7">07</option> 
					<option value="8">08</option>
					<option value="9">09</option>
					<option value="10">10</option> 
					<option value="11">11</option>
					<option value="12">12</option>
        	   </select>
            </p>
            <p>
            	Ano:
            	<select name="ano">
            		<option value="0">Ano</option> 
					<option value="1">2018</option> 
					<option value="2">2019</option>
					<option value="3">2020</option>
					<option value="4">2021</option> 
					<option value="5">2022</option>
					<option value="6">2023</option>
            	</select>
            </p>
        </p>
        <p>
        	Codigo de segurança:
        	<input type="text" name="codseg" size="10" maxlength="05">
        </p>
        <p>
        	Parcelar:
        	<select name="parcela"> 
				<option value="1"> 1 Parcela S/ Juros com desconto</option> 
				<option value="2"> 2 Parcela S/ Juros </option>
				<option value="3"> 3 Parcela S/ Juros </option>
				<option value="4"> 4 Parcela C/ Juros 5% </option> 
				<option value="5"> 5 Parcela C/ Juros 5% </option>
				<option value="6"> 6 Parcela C/ Juros 5% </option>				
			</select>
        </p>
        <input class="botao" type="submit" name="Processeguir" value="Processeguir">				
  </form>
</body>
</html>
