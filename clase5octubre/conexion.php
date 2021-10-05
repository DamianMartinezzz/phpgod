<?php 
define('SERVER','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','classicmodels');
?>

<form action="conexion.php" method="GET">
Ciudad : <input value="<?php echo $_GET['ciudad'] ?>"name="ciudad">
Codigo de la oficina: <input value="<?php echo $_GET['codigoffice'] ?>"name="codigoffice">
<input type="submit" value="Buscar">
</form>

<?php
 if(isset($_GET['ciudad'])){
	$_GET['ciudad'] = "";
 }
 if(isset($_GET['codigoffice'])) {
	$_GET['codigoffice'] = "";
 }
$ref = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
if (mysqli_connect_errno($ref)) {
    die("Falló la conexión: " . mysqli_connect_error());
}
$query = "SELECT officeCode, city, addressLine1, addressLine2, state, country, postalCode FROM offices WHERE city LIKE '%".$_GET['ciudad']."%' AND officeCode = '".$_GET['codigoffice']."'";

$result = mysqli_query($ref,$query);

if(!$result) {
	die('<b>Error de consulta: '.mysqli_error($ref).'</b>');
}
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
