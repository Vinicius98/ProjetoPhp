<?php
include_once "conexao.php";
$codproduto = $_POST["codproduto"];

$query = $mysqli->query("select*from tbproduto where codproduto='$codproduto'");

if (!$tbproduto = $query->fetch_assoc()) {
    echo "Nao possui esses dados";
    $codproduto = "";
    $nome = "";
    $quant = "";
    $preco = "";
}else{
  $codproduto = $tbproduto["codproduto"];
  $nome = $tbproduto["nome"];
  $quant = $tbproduto["quant"];
  $preco = $tbproduto["preco"];
}
?>

<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
 <form id="forms" action="altproduto.php" method="post">
 	<input type="hidden" name="codproduto" value="<?php echo $codproduto; ?>">
  	<p>Codigo do produto : <?php echo $codproduto; ?></p>
  	<p>Nome do livro 
  		<input type="text" name="txtnome" value="<?php echo $nome; ?>">
  	</p>
  	<p>Quantidade
  	    <input type="text" name="txtquant" value="<?php echo $quant; ?>"> 
  	</p>
  	<p>Preco  
 		<input type="text" name="txtpreco" value="<?php echo $preco; ?>">
  	</p>
  	<input class="botao" type="submit" name="Alterar" value="Alterar">
  </form>
</body>
</html>