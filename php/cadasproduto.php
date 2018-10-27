<html>
<head>
	<title></title>
   <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
   <form id="forms" action="inserirproduto.php" method="post">
      <h3>Cadastre aqui o livro</h3>
   	  <p>
   	  	Codigo do Produto:
   	  	<input type="text" name="codproduto" maxlength="08">
   	  </p>
   	  <p>
   	  	Nome do livro:
   	  	<input type="text" name="livro" size="35" maxlength="25">
   	  </p>
   	  <p>
   	  	Quantidade:
   	  	<input type="text" name="quant" size="10">
   	  </p>
   	  <p>
   	  	Preco:
   	  	<input type="text" name="preco" size="10">
   	  </p>
   	  <input  class="botao" type="submit" name="Cadastrar" value="Cadastrar">
   </form>
</body>
</html>