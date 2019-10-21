<html>
<body>	
<table id="data">
<h1>Listagem de Produtos</h1>
<tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Descrição</th>
 <th>Preço</th>
 <th>Fornecedor</th>
 <th>Excluir</th>
 <th>Alterar</th>
</tr>
<?php
include("lib/connection.php");
$sql="select * from produtos";
$query = mysqli_query($serv,$sql);
while ($linha = mysqli_fetch_array($query)) {
echo "<tr>";
echo "<td>$linha[id]</td>";
echo "<td>$linha[nome]</td>";
echo "<td>$linha[descricao]</td>";
echo "<td>$linha[preco]</td>";
echo "<td>$linha[idforn]</td>";
echo "<td style='text-align:center'>";
echo "<a href='javascript:delRecord(".$linha['id'].");'>X</a>";
echo "</td>";
echo "<td style='text-align:center'>";
echo "<a href='altProd.php?cod=".$linha['id']."'>";
echo "<a  href='altProd.php?cod=".$linha['id'].");'>Editar</a>";
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
 window.location = "listProd.php";
 }
 else window.location = "delProd.php?cod="+id;
}
</script> 
</html>
