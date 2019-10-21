<?php
include("lib/connection.php");
$sql = "UPDATE fornecedores
SET nome='$_POST[nome]',
cnpj='$_POST[cnpj]',
email='$_POST[email]',
telefone='$_POST[fone]'
where id='$_POST[id]'";
$query = mysqli_query($serv,$sql);
header("Location:listforn.php");
?> 