<?php
require_once "conexion.php";

if(count($_POST)>0){
	//print_r($_POST);
	$sql ="INSERT INTO offices VALUES (
								'".$_POST['officeCode']."',
								'".$_POST['city']."',
								'".$_POST['phone']."',
								'".$_POST['addressLine1']."',
								'".$_POST['addressLine2']."',
								'".$_POST['state']."',
								'".$_POST['country']."',
								'".$_POST['postalCode']."',
								'".$_POST['territory']."')";
	consulta($conn, $sql);
	header('Location: sucursales_listado.php');
}

$sql = "SELECT MAX(officeCode) AS ultimo FROM offices";
$res = consulta($conn, $sql);
$max = mysqli_fetch_assoc($res);

include "header.php";
include "menu.php";
?>
<h1>Alta de sucursales</h1>
<br>
<form method="POST" action="sucursales_alta.php">
<table>
	<tr>
		<td>officeCode</td>
		<td><input type="text" name="officeCode" value="<?php echo (++$max['ultimo']);?>" readonly></td>
	</tr>
	<tr>
		<td>city</td>
		<td><input type="text" name="city"></td>
	</tr>
	<tr>
		<td>phone</td>
		<td><input type="text" name="phone"></td>
	</tr>
	<tr>
		<td>addressLine1</td>
		<td><input type="text" name="addressLine1"></td>
	</tr>
	<tr>
		<td>addressLine2</td>
		<td><input type="text" name="addressLine2"></td>
	</tr>
	<tr>
		<td>state</td>
		<td><input type="text" name="state"></td>
	</tr>
	<tr>
		<td>country</td>
		<td><input type="text" name="country"></td>
	</tr>
	<tr>
		<td>postalCode</td>
		<td><input type="text" name="postalCode"></td>
	</tr>
	<tr>
		<td>territory</td>
		<td><input type="text" name="territory"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"></td>
	</tr>
</table>
	
</form>

<?php include "footer.php";?>