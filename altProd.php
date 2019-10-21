<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php
include("lib/connection.php");
$sql="select * from produtos where id='$_GET[cod]' ";
$query = mysqli_query($serv,$sql);
$linha = mysqli_fetch_array($query);
?>
<h1>Cadastro de Produtos</h1>
<form id="form1" name="form1" method="post" action="doaltProd.php">
<fieldset>
<legend>Cadastro</legend>
<label>ID:</label>
<input type="text" name="id" readonly="readonly" value="<?php echo $linha['id'];?>" /><br />
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" value="<?php echo $linha['nome'];?>" /><br />
<label for="nome">Descrição:</label>
<input type="text" name="desc" id="desc" value="<?php echo $linha['descricao'];?>" /><br />
<label for="nome">Preço:</label>
<input type="number" name="prec" id="prec" value="<?php echo $linha['preco'];?>" /><br />
<label for="fone">Fornecedor:</label>
<input type="number" name="idforn" id="idforn" value="<?php echo $linha['idforn'];?>" /><br />
<label></label>
<input name="enviar" type="submit" value="Alterar" />
</fieldset>
</form> 
</body>
</html>