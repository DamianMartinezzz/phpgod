<?php include "menu.php"; 
require_once "conexion.php";

$_GET['numeroCliente'] = (isset($_GET['numeroCliente'])) ? $_GET['numeroCliente'] : "";
$_GET['nombreCliente'] = (isset($_GET['nombreCliente'])) ? $_GET['nombreCliente'] : "";
?>
<form action="lista.php" method="GET">
Numero del Cliente : <input name="numeroCliente" value="<?php echo $_GET['numeroCliente'] ?>">
Nombre del Cliente: <input name="nombreCliente" value="<?php echo $_GET['nombreCliente'] ?>">
<input type="submit" value="Buscar">
</form>

<?php
$query = "SELECT * FROM customers WHERE customerNumber LIKE '%".$_GET['numeroCliente']."%' AND customerName LIKE '%".$_GET['nombreCliente']."%' LIMIT 20";
$result = queryfinal($ref,$query);

?>
<table border="1">
<tr>
<th>Numero del Cliente</th>
<th>Nombre del Cliente</th>
<th>Apellido del contacto</th>
<th>Nombre del contacto</th>
<th>Numero de telefono</th>
<th>Direccion</th>
<th>Direccion Alternativa</th>
<th>Ciudad</th>
<th>Estado</th>
<th>Codigo postal</th>
<th>Pais</th>
<th>Numero del empleado que atendio al cliente</th>
<th>Limite del credito</th>
</tr>
<?php
while($fila = mysqli_fetch_assoc($result)){ ?>
		<tr>
		<td><?php echo $fila['customerNumber']?></td>
		<td><?php echo $fila['customerName']?></td>
		<td><?php echo $fila['contactLastName']?></td>
		<td><?php echo $fila['contactFirstName']?></td>
		<td><?php echo $fila['phone']?></td>
		<td><?php echo $fila['addressLine1']?></td>
		<td><?php echo $fila['addressLine2']?></td>
		<td><?php echo $fila['city']?></td>
		<td><?php echo $fila['state']?></td>
		<td><?php echo $fila['postalCode']?></td>
		<td><?php echo $fila['country']?></td>
		<td><?php echo $fila['salesRepEmployeeNumber']?></td>
		<td><?php echo $fila['creditLimit']?></td>

<?php } ?>
	</tr>
</table>



<?php
mysqli_close($ref)
 ?>
