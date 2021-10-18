<?php include "menu.php"; 
require_once "conexion.php";

$_GET['ciudad'] = (isset($_GET['ciudad'])) ? $_GET['ciudad'] : "";
$_GET['codigoffice'] = (isset($_GET['codigoffice'])) ? $_GET['codigoffice'] : "";
?>
<form action="lista.php" method="GET">
Ciudad : <input name="ciudad" value="<?php echo $_GET['ciudad'] ?>">
Codigo de la oficina: <input name="codigoffice" value="<?php echo $_GET['codigoffice'] ?>">
<input type="submit" value="Buscar">
</form>

<?php
$ref = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
if (mysqli_connect_errno($ref)) {
    die("Falló la conexión: " . mysqli_connect_error());
}
$query = "SELECT officeCode, city, addressLine1, addressLine2, state, country, postalCode 
		  FROM offices 
		  WHERE city LIKE '%".$_GET['ciudad']."%' AND
		  officeCode LIKE '%".$_GET['codigoffice']."%'";
$result = queryfinal($ref,$query);

?>
<table border="1">
<tr>
<th>Codigo oficina</th>
<th>Ciudad</th>
<th>Direccion</th>
<th>Direccion alternativa</th>
<th>Estado</th>
<th>Pais</th>
<th>Codigo postal</th>
</tr>
<?php
while($fila = mysqli_fetch_assoc($result)){ ?>
		<tr>
		<td><?php echo $fila['officeCode'] ?></td>
		<td><?php echo $fila['city']?></td>
		<td><?php echo $fila['addressLine1']?></td>
		<td><?php echo $fila['addressLine2']?></td>
		<td><?php echo $fila['state']?></td>
		<td><?php echo $fila['country']?></td>
		<td><?php echo $fila['postalCode']?></td>

<?php } ?>
	</tr>
</table>



<?php
mysqli_close($ref)
 ?>
