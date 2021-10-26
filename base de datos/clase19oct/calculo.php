<?php 
include "menu.php";
require_once "conexion.php";

$total = 0;
$query = "SELECT productCode, quantityOrdered, priceEach FROM orderdetails LIMIT 0,20";
$result = queryfinal($ref,$query);
?>
<table border="1">
<tr>
<th>Codigo del producto</th>
<th>Cantidad</th>
<th>Precio por unidad</th>
<th>Subtotal</th>
</tr>
<?php
while($fila = mysqli_fetch_assoc($result)){ ?>
		<tr>
		<?php
		$subtotal = ($fila['priceEach'] * $fila['quantityOrdered']);
		$total+= $subtotal;
		?>
		<td><?php echo $fila['productCode'] ?></td>
		<td><?php echo $fila['quantityOrdered']?></td>
		<td><?php echo $fila['priceEach']?></td>
		<td><?php echo $subtotal?></td>
		</tr>
		
<?php } ?>
		<td colspan="3">TOTAL</td>
		<td><?php echo $total?></td>
	</tr>
</table>
	


<?php
mysqli_close($ref)
 ?>