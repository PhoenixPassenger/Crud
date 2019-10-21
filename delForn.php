<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("lib/connection.php");
$sql = "delete from fornecedores where id='$_GET[cod]' limit 1";
$sql_prod = "delete from produtos where idforn='$_GET[cod]'";
$query = mysqli_query($serv,$sql_prod);
$query = mysqli_query($serv,$sql);
header("Location:listforn.php");
?>
</body>
</html>