<?php
include_once "conexao.php";
$nomecliente = $_POST["nomecliente"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
if(isset($_POST["codproduto1"])){
	$codproduto1 = $_POST["codproduto1"];
}else{
	$codproduto1 = 0;
}
if(isset($_POST["codproduto2"])){
	$codproduto2 = $_POST["codproduto2"];
}else{
	$codproduto2 = 0;
}

$query = $mysqli->query("select*from tbproduto where codproduto='$codproduto1'");
if (!$tbproduto = $query->fetch_assoc()){
  $codproduto4 = "";
   $livro4 = NULL;
   $quant4 = 0;
   $preco4 = 0;
}else{
   $codproduto4 = $tbproduto["codproduto"];
   $livro4 = $tbproduto["nome"];
   $quant4 = $tbproduto["quant"];
   $preco4 = $tbproduto["preco"];
}
$query1 = $mysqli->query("select*from tbproduto where codproduto='$codproduto2'");
if (!$tbproduto1 = $query1->fetch_assoc()){
   $codproduto5 = "";
   $livro5 = NULL;
   $quant5 = 0;
   $preco5 = 0;
}else{
   $codproduto5 = $tbproduto["codproduto"];
   $livro5 = $tbproduto1["nome"];
   $quant5 = $tbproduto1["quant"];
   $preco5 = $tbproduto1["preco"];
}

?>

<html>
<head>
	<title></title>
   <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
  <form id="forms" action="forma.php" method="post">
   <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
   <input type="hidden" name="nomecliente" value="<?php echo $nomecliente; ?>">
   <input type="hidden" name="email" value="<?php echo $email; ?>">
   <input type="hidden" name="codproduto4" value="<?php echo $codproduto4; ?>">
   <input type="hidden" name="codproduto5" value="<?php echo $codproduto5; ?>">
   <input type="hidden" name="quant4" value="<?php echo $quant4; ?>">
   <input type="hidden" name="quant5" value="<?php echo $quant5; ?>">
   <p>
      Cod compra:
      <input type="text" name="codvenda" size="18" maxlength="08">
   </p>
   <p>
   	Livro 1
   	  <input type="text" name="livro1" value="<?php echo $livro4; ?>">
   </p>
   <p>
   	Preco:
   	  <input type="text" name="preco1" value="<?php echo $preco4; ?>">
   </p>
   <p>
   	Quantidade:
   	  <input type="text" name= "quant1">
   </p>
   <p>
   	Livro 2
   	  <input type="text" name="livro2" value="<?php echo $livro5; ?>">
   </p>
   <p>
   	Preco:
   	  <input type="text" name="preco2" value="<?php echo $preco5; ?>">
   </p>
   <p>
   	Quantidade:
   	  <input type="text" name= "quant2">
   </p>
   <input class="botao" type="submit" name="Comprar" value="Comprar">
  </form>
</body>
</html>