<html>
<head>
<?php
include("lib/connection.php");
$sql = "INSERT INTO fornecedores VALUES (null, '$_POST[nome]','$_POST[cnpj]','$_POST[email]', '$_POST[fone]')";
$query = mysqli_query($serv,$sql);
if ($query) header("Location: listforn.php");
else echo "Erro ao inserir registro. Provavelmente registro já cadastrado";
?> 
</head>
</html>
