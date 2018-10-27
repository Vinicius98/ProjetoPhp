<?php 
include_once "conexao.php";
$cpf = $_POST["cpf"];

$query = $mysqli->query("select*from tbcliente where cpf={$cpf}");

if (!$tbcliente = $query->fetch_assoc()){
  echo "Nao possui esses dados";
  $nome  = "";
  $email = "";
  $cpf = "";
  $cep = "";
  $celular = "";
}else{
  $nome  = $tbcliente["nome"];
  $email = $tbcliente["email"];
  $cpf = $tbcliente["cpf"];
  $cep = $tbcliente["cep"];
  $celular = $tbcliente["celular"];
}

?>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
  <form id="esquerda" action="altcliente.php" method="post">
  	<input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
   	<p>Nome
   		<input type="text" name="txtnome" value="<?php echo $nome; ?>">
   	</p>
   	<p>Email
   		<input type="text" name="txtemail" value="<?php echo $email; ?>">
   	</p>
   	<p>CPF 
   		<?php echo $cpf; ?>
   	</p>
   	<p>CEP :
      	<input type="text" name="txtcep" value="<?php echo $cep; ?>">
   	</p>
   	<p>Celular :
     	<input type="text" name="txtcelular" value="<?php echo $celular; ?>">
   	</p>
    <input class="botao" type="submit" name="Alterar" value="Alterar">
  </form>
</body>
</html>