<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Cadastro de Produtos</h1>
<form id="form1" name="form1" method="post" action="cadProd.php">
 <fieldset>
 <legend>Cadastro</legend>
 <label for="nome">Nome:</label>
 <input type="text" name="nome" id="nome" />
 <br />
 <label for="desc">Descrição:</label>
 <input type="text" name="desc" id="desc" />
 <br />
 <label for="prec">Preço:</label>
 <input type="text" name="prec" id="prec" />
 <br />
 <label for="fone">Fornecedor:</label>
 <select type="number" name="idforn" id="idforn">
 <?php
 include("lib/connection.php");
 $sql="select * from fornecedores";
 $query = mysqli_query($serv,$sql);

 while ($linha = mysqli_fetch_array($query)) {
 	echo "<option value='$linha[id]'>$linha[nome]</option>";
 }

 ?> 
 </select>
 <br />
 <label></label>
 <input name="enviar" type="submit" value="Cadastrar" />
 </fieldset>
</form>

</body>
</html>