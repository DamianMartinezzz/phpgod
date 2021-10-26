<?php include "menu.php"; 
require_once "conexion.php"?>

<?php 

//function listarSucursales(){
$_POST['ciudad'] = (isset($_POST['ciudad'])) ? $_POST['ciudad'] : "";
$_POST['codigoffice'] = (isset($_POST['codigoffice'])) ? $_POST['codigoffice'] : "";
?>
<form action="lista.php" method="POST">
Ciudad : <input name="ciudad" value="<?php echo $_POST['ciudad'] ?>">
Codigo de la oficina: <input name="codigoffice" value="<?php echo $_POST['codigoffice'] ?>">
<input type="submit" value="Buscar">
</form>

<?php
$query1 = "SELECT * FROM offices";
$query2 = "INSERT INTO offices(city,phone,addressLine1,addressLine2,state,country,postalCode,territory)
VALUES(".$_POST['citi'].",".$_POST['telefono'].",".$_POST['direccion1'].",".$_POST['direccion2'].",".$_POST['estado'].",".$_POST['pais'].",".$_POST['codigoPostal'].",".$_POST['territorio'].")";
$result = queryfinal($ref,$query1);
$result2= queryfinal($ref,$query2);
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

<?php } 

while($fila2 = mysqli_fetch_assoc($result2)) {
		<td><?php echo $fila['city']?></td>
		<td><?php echo $fila['phone']?></td>
		<td><?php echo $fila['addressLine1']?></td>
		<td><?php echo $fila['addressLine2']?></td>
		<td><?php echo $fila['state']?></td>
		<td><?php echo $fila['country']?></td>
		<td><?php echo $fila['postalCode']?></td>
		<td><?php echo $fila['territory']?></td>
}


?>


	</tr>
</table>



<?php
}
mysqli_close($ref)

 ?>	