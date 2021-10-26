<?php
require_once "conexion.php";
include "header.php";
include "menu.php";
$_GET['pag'] = (isset($_GET['pag'])) ? $_GET['pag'] : "1";
$total = 0;
/*
pag 1.... 0-5
pag 2.... 6-11
pag 3.... 12-17
pag 4.... 18-23
pag 33... 192
*/
$sql = "SELECT * FROM orderdetails";
$res = consulta($conn, $sql);
$cantidad_total_registros = mysqli_num_rows($res);

$sql = "SELECT * 
		FROM orderdetails 
		LIMIT ".(($_GET['pag']-1) * CANT_REGXPAG).",".CANT_REGXPAG;
$res = consulta($conn, $sql);

?>
<h1>Listado de pedidos</h1>
<h2>pagina: <?php echo $_GET['pag']; ?></h2>
<br>
<table border="1">
	<tr>
		<th>Cod Produc</th>
		<th>Cantidad</th>
		<th>Prec c/u</th>
		<th>Subtotal</th>
		<th>accion</th>
	</tr>
	<?php 
		while($fila = mysqli_fetch_assoc($res)){  
			$subTotal = ($fila['priceEach'] * $fila['quantityOrdered']);
			$total += $subTotal;
	?>
	<tr>
		<td><?php echo $fila['productCode']; ?></td>
		<td><?php echo $fila['quantityOrdered']; ?></td>
		<td>$<?php echo $fila['priceEach']; ?></td>
		<td>$<?php echo $subTotal; ?></td>
		<td>editar | eliminar</td>
	</tr>
	<?php } ?>
	<tr>
		<th colspan="3">Total</th>
		<th colspan="2">$<?php echo $total; ?></th>
	</tr>
</table>
<?php
$cantidad_total_paginas = ceil($cantidad_total_registros/CANT_REGXPAG);
echo "<a href='pedidos_listado.php?pag=1'>PRIMERA</a>-";
echo "<a href='pedidos_listado.php?pag=".($_GET['pag']-1) . "'>ANTERIOR</a>-";
for($i=1;$i<=$cantidad_total_paginas;$i++){
	echo "<a href='pedidos_listado.php?pag=".$i . "'>".$i . "</a>-";
}
echo "<a href='pedidos_listado.php?pag=".($_GET['pag']+1) . "'>SIGUIENTE</a>-";
echo "<a href='pedidos_listado.php?pag=".$cantidad_total_paginas."'>ULTIMA</a>-";
?>
<?php include "footer.php";?>