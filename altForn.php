<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php
include("lib/connection.php");
$sql="select * from fornecedores where id='$_GET[cod]' ";
$query = mysqli_query($serv,$sql);
$linha = mysqli_fetch_array($query);
?>
<h1>Cadastro de Fornecedores</h1>
<form id="form1" name="form1" method="post" action="doaltforn.php">
<fieldset>
<legend>Cadastro</legend>
<label>ID:</label>
<input type="text" name="id" readonly="readonly" value="<?php echo $linha['id'];?>" /><br />
<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" value="<?php echo $linha['nome'];?>" /><br />
<label for="nome">CNPJ:</label>
<input type="text" name="cnpj" id="cnpj" value="<?php echo $linha['cnpj'];?>" /><br />
<label for="nome">Email:</label>
<input type="text" name="email" id="email" value="<?php echo $linha['email'];?>" /><br />
<label for="fone">Telefone:</label>
<input type="text" name="fone" id="fone" value="<?php echo $linha['telefone'];?>" /><br />
<label></label>
<input name="enviar" type="submit" value="Alterar" />
</fieldset>
</form> 
</body>
</html>