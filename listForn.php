<html>
<body>	
<table id="data">
<h1>Listagem de Fornecedores</h1>
<tr>
 <th>ID</th>
 <th>Nome</th>
 <th>CNPJ</th>
 <th>E-MAIL</th>
 <th>Fone</th>
 <th>Excluir</th>
 <th>Alterar</th>
 <th>Produtos</th>
</tr>
<?php
include("lib/connection.php");
$sql="select * from fornecedores";
$query = mysqli_query($serv,$sql);
while ($linha = mysqli_fetch_array($query)) {
echo "<tr>";
echo "<td>$linha[id]</td>";
echo "<td>$linha[nome]</td>";
echo "<td>$linha[cnpj]</td>";
echo "<td>$linha[email]</td>";
echo "<td>$linha[telefone]</td>";
echo "<td style='text-align:center'>";
echo "<a href='javascript:delRecord(".$linha['id'].");'>X</a>";
echo "</td>";
echo "<td style='text-align:center'>";
echo "<a href='altforn.php?cod=".$linha['id']."'>";
echo "<a  href='altforn.php?cod=".$linha['id'].");'>Editar</a>";
echo "</td>";
echo "<td>";
echo "<a  href='listProdByForn.php?cod=".$linha['id'].");'>Página</a>";
echo "</td>";
echo "</tr>\n";

}
?>
</table> 
</body>
<script type="text/javascript">
function delRecord(id) {
 var teste = confirm("Tem certeza?");
 if (teste==false) {
 window.location = "listforn.php";
 }
 else window.location = "delforn.php?cod="+id;
}
</script> 
</html>
