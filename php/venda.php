<?php
include_once "conexao.php";
$cpf = $_POST["cpf"];

$query = $mysqli->query("select*from tbcliente where cpf={$cpf}");
while($tbcliente = $query->fetch_assoc()){
  $nomecliente  = $tbcliente["nome"];
  $email = $tbcliente["email"];
  $cpf = $tbcliente["cpf"];
}

?>

<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
  <form id="forms" action="peslivro.php" method="post">
    <h2>Bem vindo <?php echo $nomecliente; ?></h2>
    <p>Email : <?php echo $email; ?></p>
    <p>CPF : <?php echo $cpf; ?></p>
  	<input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
  	<input type="hidden" name="nomecliente" value="<?php echo $nomecliente; ?>">
  	<input type="hidden" name="email" value="<?php echo $email; ?>">
    	<h3>Digite codigo de dois livros ou um que queira:</h3>
        <p>
        	Livro 1:
    		<input type="text" name="codproduto1" maxlength="08" size="16">
        </br>
        </p>
        <p>
        	Livro 2:
        	<input type="text" name="codproduto2" maxlength="08" size="16">
        </p>
    </p>
    <input class="botao" type="submit" name="Pesquisar" value="Pesquisar">
  </form>
</body>
</html>
