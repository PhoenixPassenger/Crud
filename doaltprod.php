<?php
include("lib/connection.php");
$sql = "UPDATE produtos
SET nome='$_POST[nome]',
descricao='$_POST[desc]',
preco='$_POST[prec]',
idforn='$_POST[idforn]'
where id='$_POST[id]'";
$query = mysqli_query($serv,$sql);
header("Location:listProd.php");
?> 