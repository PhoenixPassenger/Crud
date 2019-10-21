<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("lib/connection.php");
$sql = "delete from produtos where id='$_GET[cod]' limit 1";
$query = mysqli_query($serv,$sql);
header("Location:listProd.php");
?>
</body>
</html>