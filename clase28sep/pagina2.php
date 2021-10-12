<?php 
$limite = 4;

$ref = mysqli_connect("localhost","root","","classicmodels");
if (mysqli_connect_errno()) {
    die("Falló la conexión: " . mysqli_connect_error());
}
echo "Conectado correctamente!";
$consulta = "SELECT * FROM employees";

$consultahecha = mysqli_query($ref,$consulta);
echo mysqli_error($ref);
?>
<br><br>
<table border="2" bordercolor="lightblue">
<?php
while($tablafinal = mysqli_fetch_assoc($consultahecha))
{ 
	$limite += 1;
?>
<tr>
	<td><?php echo $tablafinal['employeeNumber'];?></td>
	<td><?php echo $tablafinal['lastName'];?></td>
	<td><?php echo $tablafinal['firstName'];?></td>
	<td><?php echo $tablafinal['extension'];?></td>
	<td><?php echo $tablafinal['email'];?></td>
	<td><?php echo $tablafinal['officeCode'];?></td>
	<td><?php echo $tablafinal['reportsTo'];?></td>
	<td><?php echo $tablafinal['jobTitle'];?></td>
</tr>
<?php 
if($limite == 8){
	break;
}
} ?>
</table>
<form action="pagina4.php" method="POST">
<input type="submit" value="Pagina 2">
</form>