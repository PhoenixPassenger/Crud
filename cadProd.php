<html>
<head>
<?php
include("lib/connection.php");
$sql = "INSERT INTO produtos VALUES (null, '$_POST[nome]','$_POST[desc]','$_POST[prec]', '$_POST[idforn]')";
$query = mysqli_query($serv,$sql);
if ($query) header("Location: listforn.php");
else echo "Erro ao inserir registro. Provavelmente registro já cadastrado";
?> 
</head>
</html>