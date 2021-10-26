<?php include "menu.php"; 
require_once "conexion.php";

$_GET['ciudad'] = (isset($_GET['ciudad'])) ? $_GET['ciudad'] : "";
$_GET['codigoffice'] = (isset($_GET['codigoffice'])) ? $_GET['codigoffice'] : "";
?>
<form action="listadoSucursales.php" method="GET">
Ciudad : <input name="ciudad" value="<?php echo $_GET['ciudad'] ?>">
Codigo de la oficina: <input name="codigoffice" value="<?php echo $_GET['codigoffice'] ?>">
<input type="submit" value="Buscar">
</form>

<?php
$query = "SELECT * 
		  FROM offices 
		  WHERE city LIKE '%".$_GET['ciudad']."%' AND
		  officeCode LIKE '%".$_GET['codigoffice']."%'";
$result = queryfinal($ref,$query);

?>
<table border="1">
<tr>
<th>Codigo oficina</th>
<th>Ciudad</th>
<th>Telefono</th>
<th>Direccion</th>
<th>Direccion alternativa</th>
<th>Estado</th>
<th>Pais</th>
<th>Codigo postal</th>
<th>Territorio</th>
</tr>
<?php
while($fila = mysqli_fetch_assoc($result)){ ?>
		<tr>
		<td><?php echo $fila['officeCode'] ?></td>
		<td><?php echo $fila['city']?></td>
		<td><?php echo $fila['phone']?></td>
		<td><?php echo $fila['addressLine1']?></td>
		<td><?php echo $fila['addressLine2']?></td>
		<td><?php echo $fila['state']?></td>
		<td><?php echo $fila['country']?></td>
		<td><?php echo $fila['postalCode']?></td>
		<td><?php echo $fila['territory']?></td>

<?php } ?>
	</tr>
</table>




<?php
mysqli_close($ref)
 ?>
